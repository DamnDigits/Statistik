<?php

class layout_SystemEmail_html_7cae1f4ae9d529eff7b8696dd947249deb793469 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
  'v' => NULL,
  'o' => NULL,
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<!doctype html>

<head>
    <!--[if gte mso 15]>
    <xml>
        ';

$output0 .= '<o:OfficeDocumentSettings>';

$output0 .= '
            ';

$output0 .= '<o:AllowPNG/>';

$output0 .= '
            ';

$output0 .= '<o:PixelsPerInch>';

$output0 .= '96';

$output0 .= '</o:PixelsPerInch>';

$output0 .= '
        ';

$output0 .= '</o:OfficeDocumentSettings>';

$output0 .= '
    </xml>
    <![endif]-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        p {
            margin:10px 0;
            padding:0;
        }
        table {
            border-collapse:collapse;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            display:block;
            margin:0;
            padding:0;
        }
        img,
        a img {
            border:0;
            height:auto;
            outline:none;
            text-decoration:none;
        }
        body,
        #bodyTable,
        #bodyCell {
            height:100%;
            margin:0;
            padding:0;
            width:100%;
        }
        #outlook a {
            padding:0;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
        table {
            mso-table-lspace:0pt;
            mso-table-rspace:0pt;
        }
        .ReadMsgBody {
            width:100%;
        }
        .ExternalClass {
            width:100%;
        }
        p,
        a,
        td {
            mso-line-height-rule:exactly;
        }
        a[href^=tel],
        a[href^=sms] {
            color:inherit;
            cursor:default;
            text-decoration:none;
        }
        p,
        a,
        td,
        body,
        table,
        blockquote {
            -ms-text-size-adjust:100%;
            -webkit-text-size-adjust:100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass td,
        .ExternalClass div,
        .ExternalClass span,
        .ExternalClass font {
            line-height:100%;
        }
        a[x-apple-data-detectors]{
            color:inherit !important;
            text-decoration:none !important;
            font-size:inherit !important;
            font-family:inherit !important;
            font-weight:inherit !important;
            line-height:inherit !important;
        }

        .templateContainer {
            max-width:600px !important;
        }
        a.button {
            display:block;
        }
        .image,.retinaImage {
            vertical-align:bottom;
        }
        .textContent {
            word-break:break-word;
        }
        .textContent img {
            height:auto !important;
        }
        .dividerBlock {
            table-layout:fixed !important;
        }
        h1 {
            color:#222222;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:40px;
            font-style:normal;
            font-weight:bold;
            line-height:150%;
            letter-spacing:normal;
            text-align:center;
        }
        h2 {
            color:#222222;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:34px;
            font-style:normal;
            font-weight:bold;
            line-height:150%;
            letter-spacing:normal;
            text-align:left;
        }
        h3 {
            color:#444444;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:22px;
            font-style:normal;
            font-weight:bold;
            line-height:150%;
            letter-spacing:normal;
            text-align:left;
        }
        h4 {
            color:#999999;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:20px;
            font-style:italic;
            font-weight:normal;
            line-height:125%;
            letter-spacing:normal;
            text-align:left;
        }
        #templateHeader {
            background-image:none;
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
            border-top:0;
            border-bottom:0;
            padding-top:36px;
            padding-bottom:0;
        }
        .headerContainer {
            background-color:#ffffff;
            background-image:none;
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
            border-top:1px none ;
            border-bottom:0;
            padding-top:36px;
            padding-bottom:36px;
        }
        .headerContainer .textContent,
        .headerContainer .textContent p {
            color:#808080;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:16px;
            line-height:150%;
            text-align:left;
        }
        .headerContainer .textContent a,
        .headerContainer .textContent p a {
            color:#538bb3;
            font-weight:normal;
            text-decoration:underline;
        }
        #templateBody {
            background-color:#f2f2f2;
            background-image:none;
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
            border-top:0;
            border-bottom:0;
            padding-top:0;
            padding-bottom:0;
        }
        .bodyContainer {
            background-color:#ffffff;
            background-image:none;
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
            border-top:0;
            border-bottom:0;
            padding-top:0;
            padding-bottom:18px;
        }
        .bodyContainer .textContent,
        .bodyContainer .textContent p {
            color:#808080;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:16px;
            line-height:150%;
            text-align:left;
        }
        .bodyContainer .textContent a,
        .bodyContainer .textContent p a {
            color:#538bb3;
            font-weight:normal;
            text-decoration:underline;
        }
        #templateFooter{
            background-color:#f2f2f2;
            background-image:none;
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
            border-top:1px none ;
            border-bottom:0;
            padding-top:0;
            padding-bottom:36px;
        }
        .footerContainer{
            background-color:#313131;
            background-image:none;
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
            border-top:0;
            border-bottom:0;
            padding-top:45px;
            padding-bottom:45px;
        }
        .footerContainer .textContent,
        .footerContainer .textContent p {
            color:#FFFFFF;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:12px;
            line-height:150%;
            text-align:center;
        }
        .footerContainer .textContent a,
        .footerContainer .textContent p a {
            color:#FFFFFF;
            font-weight:normal;
            text-decoration:underline;
        }
        @media only screen and (min-width:768px){
            .templateContainer {
                width:600px !important;
            }
        }
        @media only screen and (max-width: 480px){
            body,
            table,
            td,
            p,
            a {
                -webkit-text-size-adjust:none !important;
            }
            body {
                width:100% !important;
                min-width:100% !important;
            }
            h1 {
                font-size:30px !important;
                line-height:125% !important;
            }
            h2 {
                font-size:26px !important;
                line-height:125% !important;
            }
            h3 {
                font-size:20px !important;
                line-height:150% !important;
            }
            h4 {
                font-size:18px !important;
                line-height:150% !important;
            }
            .headerContainer .textContent,
            .headerContainer .textContent p {
                font-size:16px !important;
                line-height:150% !important;
            }
            .bodyContainer .textContent,
            .bodyContainer .textContent p {
                font-size:16px !important;
                line-height:150% !important;
            }
        }
    </style>
</head>
<body>


<center>
    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable"><tr><td align="center" valign="top" id="bodyCell">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['value'] = NULL;
$arguments17['name'] = NULL;
$arguments17['name'] = 'backgroundColor';
$array19 = array (
);$arguments17['value'] = $renderingContext->getVariableProvider()->getByPath('typo3.systemConfiguration.backend.loginHighlightColor', $array19);
$renderChildrenClosure18 = ($arguments17['value'] !== null) ? function() use ($arguments17) { return $arguments17['value']; } : $renderChildrenClosure18;
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '
                ';
return $output16;
};
$arguments14 = array();

$output13 .= '';

$output13 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['value'] = NULL;
$arguments23['name'] = NULL;
$arguments23['name'] = 'backgroundColor';
$arguments23['value'] = '#ff8700';
$renderChildrenClosure24 = ($arguments23['value'] !== null) ? function() use ($arguments23) { return $arguments23['value']; } : $renderChildrenClosure24;
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '
                ';
return $output22;
};
$arguments20 = array();
$arguments20['if'] = NULL;

$output13 .= '';

$output13 .= '
            ';
return $output13;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = $renderingContext->getVariableProvider()->getByPath('typo3.systemConfiguration.backend.loginHighlightColor', $array11);

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['value'] = NULL;
$arguments4['name'] = NULL;
$arguments4['name'] = 'backgroundColor';
$array6 = array (
);$arguments4['value'] = $renderingContext->getVariableProvider()->getByPath('typo3.systemConfiguration.backend.loginHighlightColor', $array6);
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
                ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['value'] = NULL;
$arguments8['name'] = NULL;
$arguments8['name'] = 'backgroundColor';
$arguments8['value'] = '#ff8700';
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output7 .= '
                ';
return $output7;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

            <!-- HEADER START -->
            <tr><td align="center" valign="top" id="templateHeader" style="background-color: ';
$array25 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundColor', $array25)]);

$output0 .= '">

                <!--[if (gte mso 9)|(IE)]><table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;"><tr><td align="center" valign="top" width="600" style="width:600px;"><![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer"><tr><td valign="top" class="headerContainer">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="textBlock" style="min-width:100%;"><tbody class="textBlockOuter"><tr><td valign="top" class="textBlockInner" style="padding-top:9px;">

                        <!--[if mso]><table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;"><tr><td valign="top" width="600" style="width:600px;"><![endif]-->
                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="textContentContainer">
                            <tbody>
                            <tr>
                                <td valign="top" class="image" align="center" style="padding: 0px 36px; padding-bottom: 20px; color: #222222;text-align: center;">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['alt'] = NULL;
$arguments53['ismap'] = NULL;
$arguments53['longdesc'] = NULL;
$arguments53['usemap'] = NULL;
$arguments53['loading'] = NULL;
$arguments53['src'] = '';
$arguments53['treatIdAsReference'] = false;
$arguments53['image'] = NULL;
$arguments53['crop'] = NULL;
$arguments53['cropVariant'] = 'default';
$arguments53['fileExtension'] = NULL;
$arguments53['width'] = NULL;
$arguments53['height'] = NULL;
$arguments53['minWidth'] = NULL;
$arguments53['minHeight'] = NULL;
$arguments53['maxWidth'] = NULL;
$arguments53['maxHeight'] = NULL;
$arguments53['absolute'] = false;
$array55 = array (
);$arguments53['src'] = $renderingContext->getVariableProvider()->getByPath('typo3.systemConfiguration.backend.loginLogo', $array55);
// Rendering Boolean node
// Rendering Array
$array56 = array();
$array56['0'] = 1;

$expression57 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments53['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);
$arguments53['alt'] = 'TYPO3 Logo';
$arguments53['height'] = 41;
$arguments53['width'] = 150;

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
                                        ';
return $output52;
};
$arguments50 = array();

$output49 .= '';

$output49 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['alt'] = NULL;
$arguments64['ismap'] = NULL;
$arguments64['longdesc'] = NULL;
$arguments64['usemap'] = NULL;
$arguments64['loading'] = NULL;
$arguments64['src'] = '';
$arguments64['treatIdAsReference'] = false;
$arguments64['image'] = NULL;
$arguments64['crop'] = NULL;
$arguments64['cropVariant'] = 'default';
$arguments64['fileExtension'] = NULL;
$arguments64['width'] = NULL;
$arguments64['height'] = NULL;
$arguments64['minWidth'] = NULL;
$arguments64['minHeight'] = NULL;
$arguments64['maxWidth'] = NULL;
$arguments64['maxHeight'] = NULL;
$arguments64['absolute'] = false;
$arguments64['src'] = 'EXT:backend/Resources/Public/Images/typo3_black.svg';
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array66['0'] = 1;

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments64['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$arguments64['alt'] = 'TYPO3 Logo';
$arguments64['height'] = 41;
$arguments64['width'] = 150;

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
                                        ';
return $output63;
};
$arguments58 = array();
$arguments58['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('typo3.systemConfiguration.backend.loginHighlightColor', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments58['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);

$output49 .= '';

$output49 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                                            <img src="';
$array71 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('normalizedParams.siteUrl', $array71)]);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['path'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['absolute'] = false;
$arguments72['extensionName'] = 'backend';
$arguments72['path'] = 'Images/typo3_orange.svg';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output70 .= '" alt="TYPO3 Logo" height="41" width="150" />
                                        ';
return $output70;
};
$arguments68 = array();
$arguments68['if'] = NULL;

$output49 .= '';

$output49 .= '
                                    ';
return $output49;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('typo3.systemConfiguration.backend.loginLogo', $array47);

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['alt'] = NULL;
$arguments29['ismap'] = NULL;
$arguments29['longdesc'] = NULL;
$arguments29['usemap'] = NULL;
$arguments29['loading'] = NULL;
$arguments29['src'] = '';
$arguments29['treatIdAsReference'] = false;
$arguments29['image'] = NULL;
$arguments29['crop'] = NULL;
$arguments29['cropVariant'] = 'default';
$arguments29['fileExtension'] = NULL;
$arguments29['width'] = NULL;
$arguments29['height'] = NULL;
$arguments29['minWidth'] = NULL;
$arguments29['minHeight'] = NULL;
$arguments29['maxWidth'] = NULL;
$arguments29['maxHeight'] = NULL;
$arguments29['absolute'] = false;
$array31 = array (
);$arguments29['src'] = $renderingContext->getVariableProvider()->getByPath('typo3.systemConfiguration.backend.loginLogo', $array31);
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array32['0'] = 1;

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments29['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments29['alt'] = 'TYPO3 Logo';
$arguments29['height'] = 41;
$arguments29['width'] = 150;

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
                                        ';
return $output28;
};
$arguments26['__elseClosures'][] = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['alt'] = NULL;
$arguments35['ismap'] = NULL;
$arguments35['longdesc'] = NULL;
$arguments35['usemap'] = NULL;
$arguments35['loading'] = NULL;
$arguments35['src'] = '';
$arguments35['treatIdAsReference'] = false;
$arguments35['image'] = NULL;
$arguments35['crop'] = NULL;
$arguments35['cropVariant'] = 'default';
$arguments35['fileExtension'] = NULL;
$arguments35['width'] = NULL;
$arguments35['height'] = NULL;
$arguments35['minWidth'] = NULL;
$arguments35['minHeight'] = NULL;
$arguments35['maxWidth'] = NULL;
$arguments35['maxHeight'] = NULL;
$arguments35['absolute'] = false;
$arguments35['src'] = 'EXT:backend/Resources/Public/Images/typo3_black.svg';
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array37['0'] = 1;

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments35['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments35['alt'] = 'TYPO3 Logo';
$arguments35['height'] = 41;
$arguments35['width'] = 150;

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
                                        ';
return $output34;
};
$arguments26['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = $renderingContext->getVariableProvider()->getByPath('typo3.systemConfiguration.backend.loginHighlightColor', $array40);

$expression41 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
};
$arguments26['__elseClosures'][] = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                                            <img src="';
$array43 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('normalizedParams.siteUrl', $array43)]);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['path'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['absolute'] = false;
$arguments44['extensionName'] = 'backend';
$arguments44['path'] = 'Images/typo3_orange.svg';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output42 .= '" alt="TYPO3 Logo" height="41" width="150" />
                                        ';
return $output42;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" class="textContent" style="padding: 0px 36px;color: #222222;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, Verdana, sans-serif;font-size: 24px;text-align: center;">
                                    <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['section'] = NULL;
$arguments74['partial'] = NULL;
$arguments74['delegate'] = NULL;
$arguments74['renderable'] = NULL;
$arguments74['arguments'] = array (
);
$arguments74['optional'] = false;
$arguments74['default'] = NULL;
$arguments74['contentAs'] = NULL;
$arguments74['debug'] = true;
$arguments74['section'] = 'Title';
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array76['0'] = 'true';

$expression77 = function($context) {return TRUE;};
$arguments74['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output0 .= '</strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!--[if mso]></td></tr></table><![endif]-->

                    </td></tr></tbody></table>
                </td></tr></table>
                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->

            </td></tr>
            <!-- HEADER END -->


            <!-- BODY START -->
            <tr><td align="center" valign="top" id="templateBody">

                <!--[if (gte mso 9)|(IE)]><table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;"><tr><td align="center" valign="top" width="600" style="width:600px;"><![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer"><tr><td valign="top" class="bodyContainer">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="textBlock" style="min-width:100%;"><tbody class="textBlockOuter"><tr><td valign="top" class="textBlockInner" style="padding: 36px 0px;">

                        <!--[if mso]><table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;"><tr><td valign="top" width="600" style="width:600px;"><![endif]-->
                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="textContentContainer">
                            <tbody>
                            <tr>
                                <td valign="top" class="textContent" style="padding: 0px 36px;">

                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['section'] = NULL;
$arguments78['partial'] = NULL;
$arguments78['delegate'] = NULL;
$arguments78['renderable'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['optional'] = false;
$arguments78['default'] = NULL;
$arguments78['contentAs'] = NULL;
$arguments78['debug'] = true;
$arguments78['section'] = 'Main';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output0 .= '

                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!--[if mso]></td></tr></table><![endif]-->

                    </td></tr></tbody></table>
                </td></tr></table>
                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->

            </td></tr>
            <!-- BODY END -->

            <!-- FOOTER START -->
            <tr><td align="center" valign="top" id="templateFooter">

                <!--[if (gte mso 9)|(IE)]><table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;"><tr><td align="center" valign="top" width="600" style="width:600px;"><![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer"><tr><td valign="top" class="footerContainer">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="textBlock" style="min-width:100%;"><tbody class="textBlockOuter"><tr><td valign="top" class="textBlockInner">

                        <!--[if mso]><table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;"><tr><td valign="top" width="600" style="width:600px;"><![endif]-->
                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="textContentContainer"><tbody><tr><td valign="top" class="textContent" style="padding:0 36px;">

                            <p style="margin-top: 0;">
                                This email was sent by <strong>';
$array80 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typo3.sitename', $array80)]);

$output0 .= '</strong> from URL: <a href="';
$array81 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('normalizedParams.siteUrl', $array81)]);

$output0 .= '" target="_blank" rel="noopener">';
$array82 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('normalizedParams.siteUrl', $array82)]);

$output0 .= '</a> - Please contact your site administrator if you feel you received this email by accident.
                            </p>
                            <p style="margin-top: 0;">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$array85 = array (
);return $renderingContext->getVariableProvider()->getByPath('typo3.information.copyrightNotice', $array85);
};
$arguments83 = array();
$arguments83['value'] = NULL;

$output0 .= isset($arguments83['value']) ? $arguments83['value'] : $renderChildrenClosure84();

$output0 .= '
                            </p>

                        </td></tr></tbody></table>
                        <!--[if mso]></td></tr></table><![endif]-->

                    </td></tr></tbody></table>
                </td></tr></table>
                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->


            </td></tr>
            <!-- FOOTER END -->

        </table>
    </td></tr></table>
</center>

</body>

';

return $output0;
}


}
#