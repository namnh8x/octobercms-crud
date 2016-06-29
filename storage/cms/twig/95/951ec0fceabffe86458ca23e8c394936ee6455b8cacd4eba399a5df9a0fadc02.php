<?php

/* /home/namnguyen/www/html/octcrud/themes/demo/partials/explain/plugins.htm */
class __TwigTemplate_60d4fe415081e66b4e528e1d0db536151807aa4328671ad0dc1ffa22a15260d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_8898a8a8e152f4389330352b24dd4c527dedd3e1dc5f2df68003a01927a5121b' => array($this, 'block___internal_8898a8a8e152f4389330352b24dd4c527dedd3e1dc5f2df68003a01927a5121b'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>
<pre>
";
        // line 7
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_8898a8a8e152f4389330352b24dd4c527dedd3e1dc5f2df68003a01927a5121b", $context, $blocks));
        // line 9
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->pageFilter("ajax");
        echo "\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>";
    }

    // line 7
    public function block___internal_8898a8a8e152f4389330352b24dd4c527dedd3e1dc5f2df68003a01927a5121b($context, array $blocks = array())
    {
        // line 8
        echo "{% component 'demoTodo' %}";
        echo "
";
    }

    public function getTemplateName()
    {
        return "/home/namnguyen/www/html/octcrud/themes/demo/partials/explain/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  39 => 16,  30 => 9,  28 => 7,  20 => 1,);
    }
}
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-copy"></i> &nbsp; The HTML markup for this example:*/
/* </p>*/
/* <pre>*/
/* {% filter escape %}*/
/* {{ "{% component 'demoTodo' %}" }}*/
/* {% endfilter %}</pre>*/
/* */
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-question"></i> &nbsp; Wait, only one line is needed?*/
/* </p>*/
/* <p><em>Yes!</em> unlike the <a href="{{ 'ajax'|page }}">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>*/
/* <p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>*/
