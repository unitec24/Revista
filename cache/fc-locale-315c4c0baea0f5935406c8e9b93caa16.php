<?php return array (
  'plugins.importexport.users.displayName' => 'Módulo XML de usuarios/as',
  'plugins.importexport.users.description' => 'Importar y exportar usuarios/as',
  'plugins.importexport.users.cliUsage' => 'Uso: {$scriptName} {$pluginName} [command] ...
Comandos:
	import [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path] [userId1] [userId2] ...
',
  'plugins.importexport.users.cliUsage.examples' => '
Ejemplos:
	Importar usuarios/as a myJournal desde myImportFile.xml:
	{$scriptName} {$pluginName} importar myImportFile.xml myJournal

	Exportar todos los usuarios/as desde myJournal:
	{$scriptName} {$pluginName} exportar myExportFile.xml myJournal

	Exportar los usuarios/as especificados por su ID:
	{$scriptName} {$pluginName} exportar myExportFile.xml myJournal 1 2
',
  'plugins.importexport.users.import.importUsers' => 'Importar usuarios/as',
  'plugins.importexport.users.import.instructions' => 'Seleccione un fichero XML que contenga los datos de usuarias/os que quiere importar en la revista. Consulte la ayuda de la revista para saber los detalles del formato de este fichero.<br /><br />Tenga en cuenta que si el fichero importado contiene nombres de usuaria/o o direcciones de correo electrónico que ya existan en el sistema no se importarán los datos de esas/os usuarias/os y los nuevos roles a crear se asignarán a las/os usuarias/os existentes.',
  'plugins.importexport.users.import.dataFile' => 'Fichero de datos de usuaria/o',
  'plugins.importexport.users.import.sendNotify' => 'Enviar un correo electrónico de notificación a cada uno de los usuarios/as importados con su nombre de usuario/a y su contraseña.',
  'plugins.importexport.users.import.continueOnError' => 'Continuar importando el resto de usuarias/os si ocurre un error.',
  'plugins.importexport.users.import.usersWereImported' => 'Los/as siguientes usuarios/as fueron importados/as en el sistema',
  'plugins.importexport.users.import.errorsOccurred' => 'Han ocurrido errores durante la importación',
  'plugins.importexport.users.import.confirmUsers' => 'Confirme que son las/os usuarias/os que le gustaría importar en el sistema',
  'plugins.importexport.users.import.warning' => 'Aviso',
  'plugins.importexport.users.import.encryptionMismatch' => 'No es posible usar contraseñas codificadas con {$importHash}; OJS está configurado para utilizar {$ojsHash}. Si decide continuar, necesitará volver a crear las contraseñas de los usuarios/as importados.',
  'plugins.importexport.users.unknownPress' => 'Se ha especificado una ruta incorrecta para la revista "{$journalPath}".',
  'plugins.importexport.users.export.exportUsers' => 'Exportar usuarias/os',
  'plugins.importexport.users.export.exportByRole' => 'Exportar por rol',
  'plugins.importexport.users.export.exportAllUsers' => 'Exportar todo',
  'plugins.importexport.users.export.errorsOccurred' => 'Ha ocurrido un error durante la exportación',
  'plugins.importexport.users.importComplete' => 'La importación finalizó correctamente. Se han importado los usuarios/as con nombres de usuario/a y correos electrónicos que ya no están en uso, junto con los grupos de usuarios/as correspondientes.',
  'plugins.importexport.users.results' => 'Resultados',
  'plugins.importexport.users.uploadFile' => 'Cargue un archivo en "Importar" para continuar.',
);