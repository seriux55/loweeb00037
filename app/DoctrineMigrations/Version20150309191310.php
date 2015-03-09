<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150309191310 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bledvoyage__Ticket DROP FOREIGN KEY FK_A6AE8C35A76ED395');
        $this->addSql('ALTER TABLE bledvoyage__Ticket DROP FOREIGN KEY FK_A6AE8C35E4B6C17B');
        $this->addSql('DROP INDEX IDX_A6AE8C35A76ED395 ON bledvoyage__Ticket');
        $this->addSql('DROP INDEX IDX_A6AE8C35E4B6C17B ON bledvoyage__Ticket');
        $this->addSql('ALTER TABLE bledvoyage__Ticket ADD commande_id INT NOT NULL, DROP user_id, DROP categorieTicket_id');
        $this->addSql('ALTER TABLE bledvoyage__Ticket ADD CONSTRAINT FK_A6AE8C3582EA2E54 FOREIGN KEY (commande_id) REFERENCES bledvoyage__Commande (id)');
        $this->addSql('CREATE INDEX IDX_A6AE8C3582EA2E54 ON bledvoyage__Ticket (commande_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bledvoyage__Ticket DROP FOREIGN KEY FK_A6AE8C3582EA2E54');
        $this->addSql('DROP INDEX IDX_A6AE8C3582EA2E54 ON bledvoyage__Ticket');
        $this->addSql('ALTER TABLE bledvoyage__Ticket ADD categorieTicket_id INT NOT NULL, CHANGE commande_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE bledvoyage__Ticket ADD CONSTRAINT FK_A6AE8C35A76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__Ticket ADD CONSTRAINT FK_A6AE8C35E4B6C17B FOREIGN KEY (categorieTicket_id) REFERENCES bledvoyage__CategorieTicket (id)');
        $this->addSql('CREATE INDEX IDX_A6AE8C35A76ED395 ON bledvoyage__Ticket (user_id)');
        $this->addSql('CREATE INDEX IDX_A6AE8C35E4B6C17B ON bledvoyage__Ticket (categorieTicket_id)');
    }
}
