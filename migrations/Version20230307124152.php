<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307124152 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE objectif ADD id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT FK_E2F8685179F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_E2F8685179F37AE5 ON objectif (id_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY FK_E2F8685179F37AE5');
        $this->addSql('DROP INDEX IDX_E2F8685179F37AE5 ON objectif');
        $this->addSql('ALTER TABLE objectif DROP id_user_id');
    }
}
