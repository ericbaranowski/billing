-- Create the client snapshot data store table.
CREATE TABLE IF NOT EXISTS `mod_invoicedata` (
    `invoiceid` INT( 10)NOT NULL ,
    `clientsdetails` TEXT NOT NULL ,
    `customfields` TEXT NOT NULL
);
