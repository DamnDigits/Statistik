<?php

class Standard_action_index_e540a1e58839181a58fd19c1d53304853e8b47b4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$output9 = '';
$array10 = array (
);
$output9 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array10);

$output9 .= 'currentTemplate';
$arguments7['key'] = $output9;

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '</h3>
    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['table'] = NULL;
$arguments11['row'] = NULL;
$arguments11['size'] = 'small';
$arguments11['alternativeMarkupIdentifier'] = NULL;
$arguments11['table'] = 'sys_template';
$array13 = array (
);$arguments11['row'] = $renderingContext->getVariableProvider()->getByPath('templateRecord', $array13);

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output6 .= '
    <strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$array16 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkWrappedTemplateTitle', $array16);
};
$arguments14 = array();
$arguments14['value'] = NULL;

$output6 .= isset($arguments14['value']) ? $arguments14['value'] : $renderChildrenClosure15();

$output6 .= '</strong>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '(';
$array23 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array23)]);

$output22 .= ')';
return $output22;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('siteTitle', $array20);

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('existTemplate', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
    <div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
            ';
$array33 = array (
);
$output32 .= $renderingContext->getVariableProvider()->getByPath('manyTemplatesMenu', $array33);

$output32 .= '
        ';
return $output32;
};
$arguments30 = array();
$arguments30['value'] = NULL;

$output29 .= isset($arguments30['value']) ? $arguments30['value'] : $renderChildrenClosure31();

$output29 .= '
    </div>
';
return $output29;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('existTemplate', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = $renderChildrenClosure25;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output0 .= '
<div style="padding-top: 5px;"></div>
<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['key'] = NULL;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['languageKey'] = NULL;
$arguments34['alternativeLanguageKeys'] = NULL;
$output36 = '';
$array37 = array (
);
$output36 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array37);

$output36 .= 'templateHierarchy';
$arguments34['key'] = $output36;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output0 .= '</h2>
<div>
    <div class="table-fit"><table class="table table-striped table-hover" id="ts-analyzer">
        <thead>
            <tr>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['languageKey'] = NULL;
$arguments38['alternativeLanguageKeys'] = NULL;
$output40 = '';
$array41 = array (
);
$output40 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array41);

$output40 .= 'title';
$arguments38['key'] = $output40;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output0 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['key'] = NULL;
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['languageKey'] = NULL;
$arguments42['alternativeLanguageKeys'] = NULL;
$output44 = '';
$array45 = array (
);
$output44 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array45);

$output44 .= 'rootlevel';
$arguments42['key'] = $output44;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output0 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['key'] = NULL;
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['languageKey'] = NULL;
$arguments46['alternativeLanguageKeys'] = NULL;
$output48 = '';
$array49 = array (
);
$output48 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array49);

$output48 .= 'clearSetup';
$arguments46['key'] = $output48;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output0 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['languageKey'] = NULL;
$arguments50['alternativeLanguageKeys'] = NULL;
$output52 = '';
$array53 = array (
);
$output52 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array53);

$output52 .= 'clearConstants';
$arguments50['key'] = $output52;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output0 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['languageKey'] = NULL;
$arguments54['alternativeLanguageKeys'] = NULL;
$output56 = '';
$array57 = array (
);
$output56 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array57);

$output56 .= 'pid';
$arguments54['key'] = $output56;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output0 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$output60 = '';
$array61 = array (
);
$output60 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array61);

$output60 .= 'rootline';
$arguments58['key'] = $output60;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output0 .= '</th>
            </tr>
        </thead>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$array64 = array (
);return $renderingContext->getVariableProvider()->getByPath('hierarchy', $array64);
};
$arguments62 = array();
$arguments62['value'] = NULL;

$output0 .= isset($arguments62['value']) ? $arguments62['value'] : $renderChildrenClosure63();

$output0 .= '
    </table>
    </div>
</div>
<div style="padding-top: 5px;"></div>
<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['key'] = NULL;
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['languageKey'] = NULL;
$arguments65['alternativeLanguageKeys'] = NULL;
$output67 = '';
$array68 = array (
);
$output67 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array68);

$output67 .= 'completeTS';
$arguments65['key'] = $output67;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output0 .= '</h2>
<div>
    <p><a href="';
$array69 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleLink', $array69)]);

$output0 .= '" class="btn btn-default">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['key'] = NULL;
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$arguments70['languageKey'] = NULL;
$arguments70['alternativeLanguageKeys'] = NULL;
$output72 = '';
$array73 = array (
);
$output72 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array73);

$output72 .= 'viewCompleteTS';
$arguments70['key'] = $output72;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output0 .= '
    </a></p>
</div>
<div style="padding-top: 15px;"></div>
<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['key'] = NULL;
$arguments74['id'] = NULL;
$arguments74['default'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['languageKey'] = NULL;
$arguments74['alternativeLanguageKeys'] = NULL;
$output76 = '';
$array77 = array (
);
$output76 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array77);

$output76 .= 'displayOptions';
$arguments74['key'] = $output76;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output0 .= '</h2>
<div class="tst-analyzer-options">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
        <div class="checkbox">
            <label for="';
$array82 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('checkbox.id', $array82)]);

$output81 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$array85 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkbox.label', $array85);
};
$arguments83 = array();
$arguments83['value'] = NULL;

$output81 .= isset($arguments83['value']) ? $arguments83['value'] : $renderChildrenClosure84();

$output81 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['key'] = NULL;
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['languageKey'] = NULL;
$arguments86['alternativeLanguageKeys'] = NULL;
$output88 = '';
$array89 = array (
);
$output88 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array89);
$array90 = array (
);
$output88 .= $renderingContext->getVariableProvider()->getByPath('checkbox.ll', $array90);
$arguments86['key'] = $output88;

$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output81 .= '
            </label>
        </div>
    ';
return $output81;
};
$arguments78 = array();
$arguments78['each'] = NULL;
$arguments78['as'] = NULL;
$arguments78['key'] = NULL;
$arguments78['reverse'] = false;
$arguments78['iteration'] = NULL;
$array80 = array (
);$arguments78['each'] = $renderingContext->getVariableProvider()->getByPath('checkboxes', $array80);
$arguments78['as'] = 'checkbox';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output0 .= '
</div>
<div style="padding-top: 25px;"></div>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
    <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['key'] = NULL;
$arguments97['id'] = NULL;
$arguments97['default'] = NULL;
$arguments97['arguments'] = NULL;
$arguments97['extensionName'] = NULL;
$arguments97['languageKey'] = NULL;
$arguments97['alternativeLanguageKeys'] = NULL;
$output99 = '';
$array100 = array (
);
$output99 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array100);

$output99 .= 'constants';
$arguments97['key'] = $output99;

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output96 .= '</h2>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
        <h3>';
$array105 = array (
);
$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constant.title', $array105)]);

$output104 .= '</h3>
        <div class="nowrap">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$array108 = array (
);return $renderingContext->getVariableProvider()->getByPath('constant.content', $array108);
};
$arguments106 = array();
$arguments106['value'] = NULL;

$output104 .= isset($arguments106['value']) ? $arguments106['value'] : $renderChildrenClosure107();

$output104 .= '
        </div>
    ';
return $output104;
};
$arguments101 = array();
$arguments101['each'] = NULL;
$arguments101['as'] = NULL;
$arguments101['key'] = NULL;
$arguments101['reverse'] = false;
$arguments101['iteration'] = NULL;
$array103 = array (
);$arguments101['each'] = $renderingContext->getVariableProvider()->getByPath('constants', $array103);
$arguments101['as'] = 'constant';

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output96 .= '
    <div style="padding-top: 15px;"></div>
    <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['key'] = NULL;
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$arguments109['languageKey'] = NULL;
$arguments109['alternativeLanguageKeys'] = NULL;
$output111 = '';
$array112 = array (
);
$output111 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array112);

$output111 .= 'setups';
$arguments109['key'] = $output111;

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output96 .= '</h2>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
        <h3>';
$array117 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('setup.title', $array117)]);

$output116 .= '</h3>
        <div class="nowrap">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$array120 = array (
);return $renderingContext->getVariableProvider()->getByPath('setup.content', $array120);
};
$arguments118 = array();
$arguments118['value'] = NULL;

$output116 .= isset($arguments118['value']) ? $arguments118['value'] : $renderChildrenClosure119();

$output116 .= '
        </div>
    ';
return $output116;
};
$arguments113 = array();
$arguments113['each'] = NULL;
$arguments113['as'] = NULL;
$arguments113['key'] = NULL;
$arguments113['reverse'] = false;
$arguments113['iteration'] = NULL;
$array115 = array (
);$arguments113['each'] = $renderingContext->getVariableProvider()->getByPath('setups', $array115);
$arguments113['as'] = 'setup';

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output96 .= '
';
return $output96;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array94);

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#