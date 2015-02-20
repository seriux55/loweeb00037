<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150220150040 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bledvoyage__Categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, afficher VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Sortie (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, categorie_id INT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, conditions VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, tarif INT NOT NULL, maxPersonne INT NOT NULL, date_debut DATETIME NOT NULL, heure_debut VARCHAR(255) NOT NULL, date_fin DATETIME NOT NULL, heure_fin VARCHAR(255) NOT NULL, video VARCHAR(255) NOT NULL, photo1 VARCHAR(255) NOT NULL, photo2 VARCHAR(255) NOT NULL, photo3 VARCHAR(255) NOT NULL, photo4 VARCHAR(255) NOT NULL, valider VARCHAR(255) NOT NULL, charge INT NOT NULL, acces VARCHAR(255) NOT NULL, echeance INT NOT NULL, tarif_echeance INT NOT NULL, commission INT NOT NULL, annuler VARCHAR(255) NOT NULL, tarif_etud INT NOT NULL, promo_client INT NOT NULL, promo_partenaire INT NOT NULL, astuce INT NOT NULL, pub INT NOT NULL, close INT NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, INDEX IDX_D31F264A76ED395 (user_id), INDEX IDX_D31F264BCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bledvoyage__Sortie ADD CONSTRAINT FK_D31F264A76ED395 FOREIGN KEY (user_id) REFERENCES bledvoyage__User (id)');
        $this->addSql('ALTER TABLE bledvoyage__Sortie ADD CONSTRAINT FK_D31F264BCF5E72D FOREIGN KEY (categorie_id) REFERENCES bledvoyage__Categorie (id)');
        $this->addSql('DROP TABLE bledvoyage__C');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bledvoyage__Sortie DROP FOREIGN KEY FK_D31F264BCF5E72D');
        $this->addSql('CREATE TABLE bledvoyage__C (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE bledvoyage__Categorie');
        $this->addSql('DROP TABLE bledvoyage__Sortie');
    }
}
