<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307175904 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin ADD academie_id INT DEFAULT NULL, ADD salle_id INT DEFAULT NULL, ADD cours_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admin ADD CONSTRAINT FK_880E0D76B38A0D28 FOREIGN KEY (academie_id) REFERENCES academie (id)');
        $this->addSql('ALTER TABLE admin ADD CONSTRAINT FK_880E0D76DC304035 FOREIGN KEY (salle_id) REFERENCES salle (id)');
        $this->addSql('ALTER TABLE admin ADD CONSTRAINT FK_880E0D767ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('CREATE INDEX IDX_880E0D76B38A0D28 ON admin (academie_id)');
        $this->addSql('CREATE INDEX IDX_880E0D76DC304035 ON admin (salle_id)');
        $this->addSql('CREATE INDEX IDX_880E0D767ECF78B0 ON admin (cours_id)');
        $this->addSql('ALTER TABLE client ADD academie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455B38A0D28 FOREIGN KEY (academie_id) REFERENCES academie (id)');
        $this->addSql('CREATE INDEX IDX_C7440455B38A0D28 ON client (academie_id)');
        $this->addSql('ALTER TABLE cours ADD coach_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C3C105691 FOREIGN KEY (coach_id) REFERENCES coach (id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9C3C105691 ON cours (coach_id)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649B38A0D28');
        $this->addSql('DROP INDEX IDX_8D93D649B38A0D28 ON user');
        $this->addSql('ALTER TABLE user DROP academie_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin DROP FOREIGN KEY FK_880E0D76B38A0D28');
        $this->addSql('ALTER TABLE admin DROP FOREIGN KEY FK_880E0D76DC304035');
        $this->addSql('ALTER TABLE admin DROP FOREIGN KEY FK_880E0D767ECF78B0');
        $this->addSql('DROP INDEX IDX_880E0D76B38A0D28 ON admin');
        $this->addSql('DROP INDEX IDX_880E0D76DC304035 ON admin');
        $this->addSql('DROP INDEX IDX_880E0D767ECF78B0 ON admin');
        $this->addSql('ALTER TABLE admin DROP academie_id, DROP salle_id, DROP cours_id');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455B38A0D28');
        $this->addSql('DROP INDEX IDX_C7440455B38A0D28 ON client');
        $this->addSql('ALTER TABLE client DROP academie_id');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C3C105691');
        $this->addSql('DROP INDEX IDX_FDCA8C9C3C105691 ON cours');
        $this->addSql('ALTER TABLE cours DROP coach_id');
        $this->addSql('ALTER TABLE user ADD academie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649B38A0D28 FOREIGN KEY (academie_id) REFERENCES academie (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649B38A0D28 ON user (academie_id)');
    }
}
