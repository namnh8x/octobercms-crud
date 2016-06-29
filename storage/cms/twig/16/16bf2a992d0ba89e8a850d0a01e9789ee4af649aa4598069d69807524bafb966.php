<?php

/* /home/namnguyen/www/html/octcrud/themes/demo/partials/explain/ajax.htm */
class __TwigTemplate_51df66423efdfe296afe2e6f632135283881390a2ce831046c779f7200c4a026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_355f4d4d10c6c671c3573e88ea2f43ff7d64d50773c6a71468722faacfb2a5ec' => array($this, 'block___internal_355f4d4d10c6c671c3573e88ea2f43ff7d64d50773c6a71468722faacfb2a5ec'),
            '__internal_117b291b651bb3f8fd84e05b85999894afec40a4949032554dacbba1fb2ecf47' => array($this, 'block___internal_117b291b651bb3f8fd84e05b85999894afec40a4949032554dacbba1fb2ecf47'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<!-- This file is an explanation of the AJAX page -->

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>

<pre>";
        // line 9
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_355f4d4d10c6c671c3573e88ea2f43ff7d64d50773c6a71468722faacfb2a5ec", $context, $blocks));
        // line 24
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-tags\"></i> &nbsp; The <code>calcresult</code> partial:
</p>

<pre>";
        // line 32
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_117b291b651bb3f8fd84e05b85999894afec40a4949032554dacbba1fb2ecf47", $context, $blocks));
        // line 37
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-code\"></i> &nbsp; The <code>onTest</code> PHP code:
</p>

<pre>function onTest()
{
    \$value1 = post('value1');
    \$value2 = post('value2');
    \$operation = post('operation');

    switch (\$operation) {
        case '+' : 
            \$this['result'] = \$value1 + \$value2;
            break;
        case '-' : 
            \$this['result'] = \$value1 - \$value2;
            break;
        case '*' : 
            \$this['result'] = \$value1 * \$value2;
            break;
        default : 
            \$this['result'] = \$value1 / \$value2;
            break;
    }
}</pre>";
    }

    // line 9
    public function block___internal_355f4d4d10c6c671c3573e88ea2f43ff7d64d50773c6a71468722faacfb2a5ec($context, array $blocks = array())
    {
        echo "<!-- The form -->
<form data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" value=\"15\" name=\"value1\">
    <select name=\"operation\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" value=\"5\" name=\"value2\">
    <button type=\"submit\">Calculate</button>
</form>

<!-- The result -->
<div id=\"result\">";
        // line 23
        echo "{% partial \"calcresult\" %}";
        echo "</div>
";
    }

    // line 32
    public function block___internal_117b291b651bb3f8fd84e05b85999894afec40a4949032554dacbba1fb2ecf47($context, array $blocks = array())
    {
        // line 33
        echo "{% if result %}";
        echo "
    The result is ";
        // line 34
        echo "{{ result }}";
        echo ".
";
        // line 35
        echo "{% else %}";
        echo "
    Click the <em>Calculate</em> button to find the answer.
";
        // line 37
        echo "{% endif %}";
    }

    public function getTemplateName()
    {
        return "/home/namnguyen/www/html/octcrud/themes/demo/partials/explain/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  112 => 35,  108 => 34,  104 => 33,  101 => 32,  95 => 23,  77 => 9,  45 => 37,  43 => 32,  33 => 24,  31 => 9,  21 => 1,);
    }
}
/* <hr />*/
/* */
/* <!-- This file is an explanation of the AJAX page -->*/
/* */
/* <p class="lead">*/
/*     <i class="icon-copy"></i> &nbsp; The HTML markup for this example:*/
/* </p>*/
/* */
/* <pre>{% filter escape %}<!-- The form -->*/
/* <form data-request="onTest" data-request-update="calcresult: '#result'">*/
/*     <input type="text" value="15" name="value1">*/
/*     <select name="operation">*/
/*         <option>+</option>*/
/*         <option>-</option>*/
/*         <option>*</option>*/
/*         <option>/</option>*/
/*     </select>*/
/*     <input type="text" value="5" name="value2">*/
/*     <button type="submit">Calculate</button>*/
/* </form>*/
/* */
/* <!-- The result -->*/
/* <div id="result">{{ "{% partial \"calcresult\" %}" }}</div>*/
/* {% endfilter %}</pre>*/
/* */
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-tags"></i> &nbsp; The <code>calcresult</code> partial:*/
/* </p>*/
/* */
/* <pre>{% filter escape %}*/
/* {{ "{% if result %}" }}*/
/*     The result is {{ "{{ result }}" }}.*/
/* {{ "{% else %}" }}*/
/*     Click the <em>Calculate</em> button to find the answer.*/
/* {{ "{% endif %}" }}{% endfilter %}</pre>*/
/* */
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-code"></i> &nbsp; The <code>onTest</code> PHP code:*/
/* </p>*/
/* */
/* <pre>function onTest()*/
/* {*/
/*     $value1 = post('value1');*/
/*     $value2 = post('value2');*/
/*     $operation = post('operation');*/
/* */
/*     switch ($operation) {*/
/*         case '+' : */
/*             $this['result'] = $value1 + $value2;*/
/*             break;*/
/*         case '-' : */
/*             $this['result'] = $value1 - $value2;*/
/*             break;*/
/*         case '*' : */
/*             $this['result'] = $value1 * $value2;*/
/*             break;*/
/*         default : */
/*             $this['result'] = $value1 / $value2;*/
/*             break;*/
/*     }*/
/* }</pre>*/
