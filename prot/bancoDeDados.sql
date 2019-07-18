  CREATE TABLE `receber` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cliente` varchar(80) NOT NULL,
  `mes` varchar(80) NOT NULL,
  `periodo` varchar(80) NOT NULL,
  `departamento` varchar(80) NOT NULL,
  `WBS` varchar(80) NOT NULL,
  `projeto` varchar(80) NOT NULL,
  `local` varchar(80) NOT NULL,
  `valor` varchar(80) NOT NULL,
  `PO` varchar(80) NOT NULL,
  `requisicao` varchar(80) NOT NULL,
  `executante` varchar(80) NOT NULL,
  `data_envio` varchar(80) NOT NULL,
  `data_pag` varchar(80) NOT NULL,
  `nota` varchar(80) NOT NULL,
  `PM_responsavel` varchar(80) NOT NULL,
  `status` varchar(80) NOT NULL,
  `conferencia` varchar(80) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
ALTER TABLE `receber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
