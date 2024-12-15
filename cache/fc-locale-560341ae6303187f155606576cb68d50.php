<?php return array (
  'plugins.importexport.doaj.displayName' => 'Módulo de exportación DOAJ',
  'plugins.importexport.doaj.description' => 'Exportar la revista a DOAJ.',
  'plugins.importexport.doaj.export.contact' => 'Contactar con DOAJ para la inclusión',
  'plugins.importexport.doaj.registrationIntro' => 'Si desea registrar artículos desde el propio OJS, introduzca su clave API DOAJ. Si no lo hace, todavía podrá exportarlos al formato DOAJ XML, pero no podrá registrar los artículos con DOAJ desde OJS.',
  'plugins.importexport.doaj.settings.form.apiKey' => 'Clave API DOAJ',
  'plugins.importexport.doaj.settings.form.apiKey.description' => 'Encontrará su clave API en su página de usuario/a de DOAJ.',
  'plugins.importexport.doaj.settings.form.automaticRegistration.description' => 'OJS depositará los artículos automáticamente en DOAJ. Tenga en cuenta que este proceso puede llevar cierto tiempo tras la publicación (p.ej. en función de la configuración cron). Puede comprobar todos los artículos no registrados.',
  'plugins.importexport.doaj.settings.form.testMode.description' => 'Utilice la API de prueba de DOAJ (entorno de prueba) para el registro. No olvide desactivar esta opción en la versión de producción.',
  'plugins.importexport.doaj.senderTask.name' => 'Tarea de registro automático de DOAJ',
  'plugins.importexport.doaj.register.error.mdsError' => '¡El depósito no tuvo éxito! La API DOAJ informó de un error: \'{$param}\'.',
  'plugins.importexport.doaj.cliUsage' => 'Uso:
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] articles objectId1 [objectId2] ...
',
);