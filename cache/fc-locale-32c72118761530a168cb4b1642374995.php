<?php return array (
  'plugins.importexport.pubmed.displayName' => 'Módulo de exportación de XML de PubMed',
  'plugins.importexport.pubmed.description' => 'Exportación de la metadata de artículos usando XML de PubMed para Indexación en MEDLINE.',
  'plugins.importexport.pubmed.export' => 'Exportar datos',
  'plugins.importexport.pubmed.export.issues' => 'Exportar números',
  'plugins.importexport.pubmed.export.selectIssue' => 'Seleccione un número para exportar.',
  'plugins.importexport.pubmed.export.articles' => 'Exportar artículos',
  'plugins.importexport.pubmed.export.selectArticle' => 'Seleccione artículos para exportar.',
  'plugins.importexport.pubmed.cliUsage' => 'Uso: 
{$scriptName} {$pluginName} [xmlFileName] [journal_path] artículos [articleId1] [articleId2] ...
{$scriptName} {$pluginName} [xmlFileName] [journal_path] número [issueId]
',
  'plugins.importexport.pubmed.cliError' => 'ERROR:',
  'plugins.importexport.pubmed.export.error.issueNotFound' => 'No existe ningún número con el ID especificado "{$issueId}".',
  'plugins.importexport.pubmed.export.error.articleNotFound' => 'No existe ningún artículo con el ID especificado "{$articleId}".',
);