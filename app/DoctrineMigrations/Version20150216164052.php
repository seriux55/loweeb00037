<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150216164052 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bledvoyage__User (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, username_canonical VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, email_canonical VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', credentials_expired TINYINT(1) NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, gender INT NOT NULL, firstname VARCHAR(255) NOT NULL, secondename VARCHAR(255) NOT NULL, born INT NOT NULL, phone VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, deposit DATETIME NOT NULL, UNIQUE INDEX UNIQ_9264ADD692FC23A8 (username_canonical), UNIQUE INDEX UNIQ_9264ADD6A0D96FBF (email_canonical), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, afficher VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bledvoyage__Sortie (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, descreptif LONGTEXT NOT NULL, conditions LONGTEXT NOT NULL, tarif INT NOT NULL, max_personne INT NOT NULL, date_debut DATE NOT NULL, heure_debut VARCHAR(16) NOT NULL, date_fin DATE NOT NULL, heure_fin VARCHAR(16) NOT NULL, video VARCHAR(255) NOT NULL, valider VARCHAR(255) NOT NULL, charge INT NOT NULL, acces VARCHAR(512) NOT NULL, echeance INT NOT NULL, tarif_echeance INT NOT NULL, commission INT NOT NULL, annuler VARCHAR(255) NOT NULL, tarif_etud INT NOT NULL, promo_client INT NOT NULL, promo_partenaire INT NOT NULL, astuce INT NOT NULL, pub INT NOT NULL, close INT NOT NULL, localisation VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE bledvoyage__User');
        $this->addSql('DROP TABLE bledvoyage__Categorie');
        $this->addSql('DROP TABLE bledvoyage__Sortie');
    }
}
