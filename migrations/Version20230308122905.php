<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308122905 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE academie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, numtel VARCHAR(255) NOT NULL, sportpropose VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, salle_id INT NOT NULL, coach_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, date DATE NOT NULL, duree INT NOT NULL, nbparticipants INT NOT NULL, INDEX IDX_FDCA8C9CDC304035 (salle_id), INDEX IDX_FDCA8C9C3C105691 (coach_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salle (id INT AUTO_INCREMENT NOT NULL, academie_id INT NOT NULL, nom VARCHAR(255) NOT NULL, capacite INT NOT NULL, equipement INT NOT NULL, INDEX IDX_4E977E5CB38A0D28 (academie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CDC304035 FOREIGN KEY (salle_id) REFERENCES salle (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C3C105691 FOREIGN KEY (coach_id) REFERENCES coach (id)');
        $this->addSql('ALTER TABLE salle ADD CONSTRAINT FK_4E977E5CB38A0D28 FOREIGN KEY (academie_id) REFERENCES academie (id)');
        $this->addSql('ALTER TABLE client ADD academie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455B38A0D28 FOREIGN KEY (academie_id) REFERENCES academie (id)');
        $this->addSql('CREATE INDEX IDX_C7440455B38A0D28 ON client (academie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455B38A0D28');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CDC304035');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C3C105691');
        $this->addSql('ALTER TABLE salle DROP FOREIGN KEY FK_4E977E5CB38A0D28');
        $this->addSql('DROP TABLE academie');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE salle');
        $this->addSql('DROP INDEX IDX_C7440455B38A0D28 ON client');
        $this->addSql('ALTER TABLE client DROP academie_id');
    }
}
