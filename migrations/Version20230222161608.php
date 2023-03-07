<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222161608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE routine_aliment (routine_id INT NOT NULL, aliment_id INT NOT NULL, INDEX IDX_B001D7B3F27A94C7 (routine_id), INDEX IDX_B001D7B3415B9F11 (aliment_id), PRIMARY KEY(routine_id, aliment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE routine_aliment ADD CONSTRAINT FK_B001D7B3F27A94C7 FOREIGN KEY (routine_id) REFERENCES routine (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE routine_aliment ADD CONSTRAINT FK_B001D7B3415B9F11 FOREIGN KEY (aliment_id) REFERENCES aliment (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE routine_aliment DROP FOREIGN KEY FK_B001D7B3F27A94C7');
        $this->addSql('ALTER TABLE routine_aliment DROP FOREIGN KEY FK_B001D7B3415B9F11');
        $this->addSql('DROP TABLE routine_aliment');
    }
}
