<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308135553 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_location (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE espace (id INT AUTO_INCREMENT NOT NULL, categorielocation_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, caracteristique VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, dispo VARCHAR(255) NOT NULL, tarifhoraire DATETIME NOT NULL, prixlocation DOUBLE PRECISION NOT NULL, INDEX IDX_6AB096DFBCF1B5A (categorielocation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE espace ADD CONSTRAINT FK_6AB096DFBCF1B5A FOREIGN KEY (categorielocation_id) REFERENCES categorie_location (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE espace DROP FOREIGN KEY FK_6AB096DFBCF1B5A');
        $this->addSql('DROP TABLE categorie_location');
        $this->addSql('DROP TABLE espace');
    }
}
