<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307174408 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ADD categorielocation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455FBCF1B5A FOREIGN KEY (categorielocation_id) REFERENCES categorie_location (id)');
        $this->addSql('CREATE INDEX IDX_C7440455FBCF1B5A ON client (categorielocation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455FBCF1B5A');
        $this->addSql('DROP INDEX IDX_C7440455FBCF1B5A ON client');
        $this->addSql('ALTER TABLE client DROP categorielocation_id');
    }
}
