<?php

/* /home/namnguyen/www/html/octcrud/themes/demo/partials/footer.htm */
class __TwigTemplate_cce82e749e87a50687418f7e0aef82233b3b7fba055a6e060b89ea4538c814b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; 2013 - ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Alexey Bobkov &amp; Samuel Georges.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/namnguyen/www/html/octcrud/themes/demo/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <div id="footer">*/
/*     <div class="container">*/
/*         <hr />*/
/*         <p class="muted credit">&copy; 2013 - {{ "now"|date("Y") }} Alexey Bobkov &amp; Samuel Georges.</p>*/
/*     </div>*/
/* </div>*/
