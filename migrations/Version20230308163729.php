<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308163729 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE aliment (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, nb_cal INT NOT NULL, descr VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE objectif (id INT AUTO_INCREMENT NOT NULL, poids_des INT NOT NULL, type_reg INT NOT NULL, cal_cons INT NOT NULL, age INT DEFAULT NULL, sexe VARCHAR(255) DEFAULT NULL, poids INT DEFAULT NULL, taille INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE routine (id INT AUTO_INCREMENT NOT NULL, dejeuner_id INT DEFAULT NULL, aliments_id INT DEFAULT NULL, objectif_id INT NOT NULL, midi_id INT DEFAULT NULL, dinner_id INT DEFAULT NULL, cal_cons INT NOT NULL, date DATE NOT NULL, INDEX IDX_4BF6D8D668482329 (dejeuner_id), INDEX IDX_4BF6D8D68D80C648 (aliments_id), INDEX IDX_4BF6D8D6157D1AD4 (objectif_id), INDEX IDX_4BF6D8D6EB6AD9EF (midi_id), INDEX IDX_4BF6D8D6C8B1AA0C (dinner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE routine_aliment (routine_id INT NOT NULL, aliment_id INT NOT NULL, INDEX IDX_B001D7B3F27A94C7 (routine_id), INDEX IDX_B001D7B3415B9F11 (aliment_id), PRIMARY KEY(routine_id, aliment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE routine ADD CONSTRAINT FK_4BF6D8D668482329 FOREIGN KEY (dejeuner_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE routine ADD CONSTRAINT FK_4BF6D8D68D80C648 FOREIGN KEY (aliments_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE routine ADD CONSTRAINT FK_4BF6D8D6157D1AD4 FOREIGN KEY (objectif_id) REFERENCES objectif (id)');
        $this->addSql('ALTER TABLE routine ADD CONSTRAINT FK_4BF6D8D6EB6AD9EF FOREIGN KEY (midi_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE routine ADD CONSTRAINT FK_4BF6D8D6C8B1AA0C FOREIGN KEY (dinner_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE routine_aliment ADD CONSTRAINT FK_B001D7B3F27A94C7 FOREIGN KEY (routine_id) REFERENCES routine (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE routine_aliment ADD CONSTRAINT FK_B001D7B3415B9F11 FOREIGN KEY (aliment_id) REFERENCES aliment (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE routine DROP FOREIGN KEY FK_4BF6D8D668482329');
        $this->addSql('ALTER TABLE routine DROP FOREIGN KEY FK_4BF6D8D68D80C648');
        $this->addSql('ALTER TABLE routine DROP FOREIGN KEY FK_4BF6D8D6157D1AD4');
        $this->addSql('ALTER TABLE routine DROP FOREIGN KEY FK_4BF6D8D6EB6AD9EF');
        $this->addSql('ALTER TABLE routine DROP FOREIGN KEY FK_4BF6D8D6C8B1AA0C');
        $this->addSql('ALTER TABLE routine_aliment DROP FOREIGN KEY FK_B001D7B3F27A94C7');
        $this->addSql('ALTER TABLE routine_aliment DROP FOREIGN KEY FK_B001D7B3415B9F11');
        $this->addSql('DROP TABLE aliment');
        $this->addSql('DROP TABLE objectif');
        $this->addSql('DROP TABLE routine');
        $this->addSql('DROP TABLE routine_aliment');
    }
}
