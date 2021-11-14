<?php

class List_action_unresolvedDependencies_68284af67b4dd220a4d2ab558dcde2aef6f7676e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'main';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return 'Install extension';
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'installExtension';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= ' <small>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['key'] = 'downloadExtension.dependencies.errorTitle';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</small></h1>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['section'] = NULL;
$arguments5['partial'] = NULL;
$arguments5['delegate'] = NULL;
$arguments5['renderable'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['optional'] = false;
$arguments5['default'] = NULL;
$arguments5['contentAs'] = NULL;
$arguments5['debug'] = true;
$arguments5['partial'] = 'List/UnresolvedDependencies';
$arguments5['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['section'] = NULL;
$arguments13['partial'] = NULL;
$arguments13['delegate'] = NULL;
$arguments13['renderable'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['optional'] = false;
$arguments13['default'] = NULL;
$arguments13['contentAs'] = NULL;
$arguments13['debug'] = true;
$arguments13['partial'] = 'List/UnresolvedDependenciesMessage';

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
    ';
return $output12;
};
$arguments8 = array();
$arguments8['message'] = NULL;
$arguments8['title'] = NULL;
$arguments8['state'] = -2;
$arguments8['iconName'] = NULL;
$arguments8['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['key'] = NULL;
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['languageKey'] = NULL;
$arguments10['alternativeLanguageKeys'] = NULL;
$arguments10['key'] = 'dependencyCheck.unresolvedDependencies.title';
$arguments8['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);
$arguments8['state'] = 1;
$renderChildrenClosure9 = ($arguments8['message'] !== null) ? function() use ($arguments8) { return $arguments8['message']; } : $renderChildrenClosure9;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return '
        Go back
    ';
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['name'] = NULL;
$arguments15['rel'] = NULL;
$arguments15['rev'] = NULL;
$arguments15['target'] = NULL;
$arguments15['action'] = NULL;
$arguments15['controller'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['pluginName'] = NULL;
$arguments15['pageUid'] = NULL;
$arguments15['pageType'] = NULL;
$arguments15['noCache'] = NULL;
$arguments15['noCacheHash'] = NULL;
$arguments15['section'] = NULL;
$arguments15['format'] = NULL;
$arguments15['linkAccessRestrictedPages'] = NULL;
$arguments15['additionalParams'] = NULL;
$arguments15['absolute'] = NULL;
$arguments15['addQueryString'] = NULL;
$arguments15['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments15['addQueryStringMethod'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['action'] = 'index';
$arguments15['class'] = 'btn btn-default onClickMaskExtensionManager';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['key'] = NULL;
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$arguments22['languageKey'] = NULL;
$arguments22['alternativeLanguageKeys'] = NULL;
$arguments22['key'] = 'dependencyCheck.unresolvedDependencies.proceed';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output21 .= '
    ';
return $output21;
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['name'] = NULL;
$arguments17['rel'] = NULL;
$arguments17['rev'] = NULL;
$arguments17['target'] = NULL;
$arguments17['action'] = NULL;
$arguments17['controller'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['pluginName'] = NULL;
$arguments17['pageUid'] = NULL;
$arguments17['pageType'] = NULL;
$arguments17['noCache'] = NULL;
$arguments17['noCacheHash'] = NULL;
$arguments17['section'] = NULL;
$arguments17['format'] = NULL;
$arguments17['linkAccessRestrictedPages'] = NULL;
$arguments17['additionalParams'] = NULL;
$arguments17['absolute'] = NULL;
$arguments17['addQueryString'] = NULL;
$arguments17['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments17['addQueryStringMethod'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['action'] = 'installExtensionWithoutSystemDependencyCheck';
$arguments17['controller'] = 'Action';
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array20);
$arguments17['arguments'] = $array19;
$arguments17['class'] = 'btn btn-danger t3js-dependencies disabled onClickMaskExtensionManager';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output24 = '';

$output24 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['name'] = NULL;
$arguments25['name'] = 'main';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output24 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '

    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return 'Install extension';
};
$arguments30 = array();
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['languageKey'] = NULL;
$arguments30['alternativeLanguageKeys'] = NULL;
$arguments30['key'] = 'installExtension';

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output29 .= ' <small>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['key'] = NULL;
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['languageKey'] = NULL;
$arguments32['alternativeLanguageKeys'] = NULL;
$arguments32['key'] = 'downloadExtension.dependencies.errorTitle';

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output29 .= '</small></h1>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['section'] = NULL;
$arguments34['partial'] = NULL;
$arguments34['delegate'] = NULL;
$arguments34['renderable'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['optional'] = false;
$arguments34['default'] = NULL;
$arguments34['contentAs'] = NULL;
$arguments34['debug'] = true;
$arguments34['partial'] = 'List/UnresolvedDependencies';
$arguments34['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output29 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['section'] = NULL;
$arguments42['partial'] = NULL;
$arguments42['delegate'] = NULL;
$arguments42['renderable'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['optional'] = false;
$arguments42['default'] = NULL;
$arguments42['contentAs'] = NULL;
$arguments42['debug'] = true;
$arguments42['partial'] = 'List/UnresolvedDependenciesMessage';

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
    ';
return $output41;
};
$arguments37 = array();
$arguments37['message'] = NULL;
$arguments37['title'] = NULL;
$arguments37['state'] = -2;
$arguments37['iconName'] = NULL;
$arguments37['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['key'] = NULL;
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['languageKey'] = NULL;
$arguments39['alternativeLanguageKeys'] = NULL;
$arguments39['key'] = 'dependencyCheck.unresolvedDependencies.title';
$arguments37['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
$arguments37['state'] = 1;
$renderChildrenClosure38 = ($arguments37['message'] !== null) ? function() use ($arguments37) { return $arguments37['message']; } : $renderChildrenClosure38;
$output29 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output29 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return '
        Go back
    ';
};
$arguments44 = array();
$arguments44['additionalAttributes'] = NULL;
$arguments44['data'] = NULL;
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$arguments44['name'] = NULL;
$arguments44['rel'] = NULL;
$arguments44['rev'] = NULL;
$arguments44['target'] = NULL;
$arguments44['action'] = NULL;
$arguments44['controller'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['pluginName'] = NULL;
$arguments44['pageUid'] = NULL;
$arguments44['pageType'] = NULL;
$arguments44['noCache'] = NULL;
$arguments44['noCacheHash'] = NULL;
$arguments44['section'] = NULL;
$arguments44['format'] = NULL;
$arguments44['linkAccessRestrictedPages'] = NULL;
$arguments44['additionalParams'] = NULL;
$arguments44['absolute'] = NULL;
$arguments44['addQueryString'] = NULL;
$arguments44['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments44['addQueryStringMethod'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['action'] = 'index';
$arguments44['class'] = 'btn btn-default onClickMaskExtensionManager';

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output29 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['languageKey'] = NULL;
$arguments51['alternativeLanguageKeys'] = NULL;
$arguments51['key'] = 'dependencyCheck.unresolvedDependencies.proceed';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output50 .= '
    ';
return $output50;
};
$arguments46 = array();
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['name'] = NULL;
$arguments46['rel'] = NULL;
$arguments46['rev'] = NULL;
$arguments46['target'] = NULL;
$arguments46['action'] = NULL;
$arguments46['controller'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['pluginName'] = NULL;
$arguments46['pageUid'] = NULL;
$arguments46['pageType'] = NULL;
$arguments46['noCache'] = NULL;
$arguments46['noCacheHash'] = NULL;
$arguments46['section'] = NULL;
$arguments46['format'] = NULL;
$arguments46['linkAccessRestrictedPages'] = NULL;
$arguments46['additionalParams'] = NULL;
$arguments46['absolute'] = NULL;
$arguments46['addQueryString'] = NULL;
$arguments46['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments46['addQueryStringMethod'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['action'] = 'installExtensionWithoutSystemDependencyCheck';
$arguments46['controller'] = 'Action';
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array49);
$arguments46['arguments'] = $array48;
$arguments46['class'] = 'btn btn-danger t3js-dependencies disabled onClickMaskExtensionManager';

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output29 .= '

';
return $output29;
};
$arguments27 = array();
$arguments27['name'] = NULL;
$arguments27['name'] = 'content';

$output24 .= NULL;

$output24 .= '
';

return $output24;
}


}
#