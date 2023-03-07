<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307172431 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ADD espace_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455B6885C6C FOREIGN KEY (espace_id) REFERENCES espace (id)');
        $this->addSql('CREATE INDEX IDX_C7440455B6885C6C ON client (espace_id)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649B6885C6C');
        $this->addSql('DROP INDEX IDX_8D93D649B6885C6C ON user');
        $this->addSql('ALTER TABLE user DROP espace_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455B6885C6C');
        $this->addSql('DROP INDEX IDX_C7440455B6885C6C ON client');
        $this->addSql('ALTER TABLE client DROP espace_id');
        $this->addSql('ALTER TABLE user ADD espace_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649B6885C6C FOREIGN KEY (espace_id) REFERENCES espace (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649B6885C6C ON user (espace_id)');
    }
}
