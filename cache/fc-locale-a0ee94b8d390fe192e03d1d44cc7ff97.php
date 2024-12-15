<?php return array (
  'api.announcements.400.contextsNotMatched' => 'El aviso que ha solicitado no forma parte de esta revista.',
  'api.submissions.403.cantChangeContext' => 'No puede cambiar la revista de un envío.',
  'api.submissions.403.unpublishedIssues' => 'No tiene permiso para ver los números retirados de publicación.',
  'api.submissions.403.contextRequired' => 'Para hacer o editar un envío debe realizar una solicitud al terminal API de la revista.',
  'api.contexts.403.requestedDisabledContexts' => 'Solo puede ver revistas que hayan sido habilitadas.',
  'api.contexts.403.notAllowed' => 'No tiene permiso para ver esta revista.',
  'api.contexts.403.contextsDidNotMatch' => 'No puede ver o editar esta revista a menos que haga una solicitud al API de la revista o al API de todo el sitio.',
  'api.contexts.403.requiresContext' => 'No puede editar esta revista desde la API de todo el sitio.',
  'api.contexts.403.notAllowedEdit' => 'No tiene permiso para editar esta revista.',
  'api.contexts.403.notAllowedDelete' => 'No tiene permiso para eliminar esta revista.',
  'api.contexts.404.contextNotFound' => 'No se encontró la revista solicitada.',
  'api.emailTemplates.403.notAllowedChangeContext' => 'No tiene permiso para mover esta plantilla de correo electrónico a otra revista.',
  'api._payments.400.invalidPaymentMethod' => 'El método de pago que ha seleccionado no está soportado.',
  'api.publications.403.contextsDidNotMatch' => 'La publicación que ha solicitado no forma parte de esta revista.',
  'api.publications.403.submissionsDidNotMatch' => 'La publicación que ha solicitado no forma parte de este envío.',
  'api.submissionFiles.400.badRepresentationAssocType' => 'Desde esta fase no puede asociar un archivo con una galerada.',
  'api.400.paramNotSupported' => 'El parámetro {$param} no está soportado.',
  'api.403.unauthorized' => 'No tiene autorización para acceder al recurso solicitado.',
  'api.404.resourceNotFound' => 'El recurso solicitado no fue encontrado.',
  'api.404.endpointNotFound' => 'La URL solicitada no fue reconocida.',
  'api.submissions.403.csrfTokenFailure' => '
solicitud fue rechazada. Esto puede deberse a que su sesión ha "
Pruebe recargar la página e intenrtar nuevamente."',
  'api.submissions.403.requestedOthersUnpublishedSubmissions' => '
puede ver envíos sin publicar a los que usted ha sido asignado."',
  'api.submissions.403.deleteSubmissionOutOfContext' => 'No puede eliminar un envío que no está asignado a este contexto.',
  'api.submissions.403.unauthorizedDeleteSubmission' => 'No tiene permisos para eliminar este envío.',
  'api.submissions.404.resourceNotFound' => 'El recurso solicitado no fue encontrado.',
  'api.submissions.400.missingRequired' => '
solicitud no pudo ser completada ya que le falta información requerida."',
  'api.submissions.400.invalidIssueIdentifiers' => 'El volumen, número o año requerido no es válido.',
  'api.stats.400.wrongDateFormat' => '
solicitud no fue válida. La fecha debe tener el formato YYYY-MM-DD."',
  'api.stats.400.wrongDateRange' => '
solicitud no fue válida. La fecha de inicio no puede ser posterior a "
fecha de finalización."',
  'api.stats.400.wrongTimeSegmentDaily' => '
solicitud no fue válida. El segmento de tiempo "diario" sólo puede "
junto a un rango de fechas (fecha de inicio y fecha de "
dentro de los últimos 90 días."',
);