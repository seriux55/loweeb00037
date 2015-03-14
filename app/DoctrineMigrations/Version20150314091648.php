<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150314091648 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bledvoyage__AvisSortie CHANGE emotion emotion INT NOT NULL COMMENT \'0:content, 1:bof, 3:triste\'');
        $this->addSql('ALTER TABLE bledvoyage__Booking CHANGE confirmer confirmer VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', CHANGE avis avis VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui, 2:en attente\', CHANGE facture facture VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\'');
        $this->addSql('ALTER TABLE bledvoyage__Categorie CHANGE afficher afficher VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\'');
        $this->addSql('ALTER TABLE bledvoyage__Commande CHANGE confirmer confirmer VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', CHANGE facture facture VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\'');
        $this->addSql('ALTER TABLE bledvoyage__DateSortie CHANGE annuler annuler VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\'');
        $this->addSql('ALTER TABLE bledvoyage__Sortie CHANGE valider valider VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', CHANGE annuler annuler VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\', CHANGE astuce astuce INT NOT NULL COMMENT \'0:non, 1:oui\', CHANGE pub pub INT NOT NULL COMMENT \'0:non, 1:oui\', CHANGE close close INT NOT NULL COMMENT \'0:non, 1:oui\'');
        $this->addSql('ALTER TABLE bledvoyage__ticket CHANGE close close VARCHAR(255) NOT NULL COMMENT \'0:non, 1:oui\'');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bledvoyage__AvisSortie CHANGE emotion emotion INT NOT NULL');
        $this->addSql('ALTER TABLE bledvoyage__Booking CHANGE confirmer confirmer VARCHAR(255) NOT NULL, CHANGE avis avis VARCHAR(255) NOT NULL, CHANGE facture facture VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE bledvoyage__Categorie CHANGE afficher afficher VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE bledvoyage__Commande CHANGE confirmer confirmer VARCHAR(255) NOT NULL, CHANGE facture facture VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE bledvoyage__DateSortie CHANGE annuler annuler VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE bledvoyage__Sortie CHANGE valider valider VARCHAR(255) NOT NULL, CHANGE annuler annuler VARCHAR(255) NOT NULL, CHANGE astuce astuce INT NOT NULL, CHANGE pub pub INT NOT NULL, CHANGE close close INT NOT NULL');
        $this->addSql('ALTER TABLE bledvoyage__Ticket CHANGE close close VARCHAR(255) NOT NULL');
    }
}
