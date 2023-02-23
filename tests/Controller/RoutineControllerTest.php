<?php

namespace App\Test\Controller;

use App\Entity\Routine;
use App\Repository\RoutineRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RoutineControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private RoutineRepository $repository;
    private string $path = '/routine/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Routine::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Routine index');

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
            'routine[Dej]' => 'Testing',
            'routine[Midi]' => 'Testing',
            'routine[Dinner]' => 'Testing',
            'routine[CalCons]' => 'Testing',
            'routine[Date]' => 'Testing',
            'routine[aliments]' => 'Testing',
        ]);

        self::assertResponseRedirects('/routine/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Routine();
        $fixture->setDej('My Title');
        $fixture->setMidi('My Title');
        $fixture->setDinner('My Title');
        $fixture->setCalCons('My Title');
        $fixture->setDate('My Title');
        $fixture->setAliments('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Routine');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Routine();
        $fixture->setDej('My Title');
        $fixture->setMidi('My Title');
        $fixture->setDinner('My Title');
        $fixture->setCalCons('My Title');
        $fixture->setDate('My Title');
        $fixture->setAliments('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'routine[Dej]' => 'Something New',
            'routine[Midi]' => 'Something New',
            'routine[Dinner]' => 'Something New',
            'routine[CalCons]' => 'Something New',
            'routine[Date]' => 'Something New',
            'routine[aliments]' => 'Something New',
        ]);

        self::assertResponseRedirects('/routine/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getDej());
        self::assertSame('Something New', $fixture[0]->getMidi());
        self::assertSame('Something New', $fixture[0]->getDinner());
        self::assertSame('Something New', $fixture[0]->getCalCons());
        self::assertSame('Something New', $fixture[0]->getDate());
        self::assertSame('Something New', $fixture[0]->getAliments());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Routine();
        $fixture->setDej('My Title');
        $fixture->setMidi('My Title');
        $fixture->setDinner('My Title');
        $fixture->setCalCons('My Title');
        $fixture->setDate('My Title');
        $fixture->setAliments('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/routine/');
    }
}
