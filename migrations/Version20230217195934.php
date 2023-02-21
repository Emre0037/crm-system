<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230217195934 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
     
        $this->addSql('ALTER TABLE message CHANGE message_image message_image LONGBLOB DEFAULT NULL, CHANGE message_file message_file LONGBLOB DEFAULT NULL');
    
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE message CHANGE message_image message_image TINYBLOB DEFAULT NULL, CHANGE message_file message_file TINYBLOB DEFAULT NULL');
    
    }
}
