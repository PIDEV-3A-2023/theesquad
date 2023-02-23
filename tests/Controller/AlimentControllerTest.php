<?php

namespace App\Test\Controller;

use App\Entity\Aliment;
use App\Repository\AlimentRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AlimentControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private AlimentRepository $repository;
    private string $path = '/aliment/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Aliment::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Aliment index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'aliment[Nom]' => 'Testing',
            'aliment[NbCal]' => 'Testing',
            'aliment[Descr]' => 'Testing',
        ]);

        self::assertResponseRedirects('/aliment/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Aliment();
        $fixture->setNom('My Title');
        $fixture->setNbCal('My Title');
        $fixture->setDescr('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Aliment');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Aliment();
        $fixture->setNom('My Title');
        $fixture->setNbCal('My Title');
        $fixture->setDescr('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'aliment[Nom]' => 'Something New',
            'aliment[NbCal]' => 'Something New',
            'aliment[Descr]' => 'Something New',
        ]);

        self::assertResponseRedirects('/aliment/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getNbCal());
        self::assertSame('Something New', $fixture[0]->getDescr());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Aliment();
        $fixture->setNom('My Title');
        $fixture->setNbCal('My Title');
        $fixture->setDescr('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/aliment/');
    }
}
