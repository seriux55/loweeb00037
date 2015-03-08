<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150307161027 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bledvoyage__Ticket (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, code VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, used INT NOT NULL, close VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, ip VARCHAR(255) NOT NULL, categorieTicket_id INT NOT NULL, INDEX IDX_A6AE8C35A76ED395 (user_id), INDEX IDX_A6AE8C35E4B6C17B (categorieTicket_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bledvoyage__Ticket ADD CONSTRAINT FK_A6AE8C35A76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__Ticket ADD CONSTRAINT FK_A6AE8C35E4B6C17B FOREIGN KEY (categorieTicket_id) REFERENCES bledvoyage__CategorieTicket (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE bledvoyage__Ticket');
    }
}
