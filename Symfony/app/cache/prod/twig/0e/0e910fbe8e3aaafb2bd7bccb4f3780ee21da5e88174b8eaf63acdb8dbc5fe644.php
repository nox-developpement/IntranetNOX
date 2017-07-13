<?php

/* NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig */
class __TwigTemplate_c85d8c7fdfcc51d45123483ba44140232849fbf3ad87c4fe4d07a8b5a0ea1103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Edition ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Administration assistant d'affaires";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div id='divExcelTableBinding' style='width: 70%; height: 80%; margin: auto;'>
        <table id='excelTableBinding'>
            <tr>
                <td></td>
            </tr>
        </table>
    </div>

    <script>

        \$(window).load(function () {
            excelTableExpansion();
        });

        function excelTableExpansion() {
            // On récupére le tableau et la div qui le contient.
            var table = \$('#excelTableBinding');
            var div = \$('#divExcelTableBinding');

            // On récupére les coodonnées de longueur et de largeur de la div.
            var width = div.offset().left + div.outerWidth();
            var height = div.offset().top + div.outerHeight();

            while ((table.offset().top + table.outerHeight()) < height) {
                var tr = table.append('<tr></tr>');

                /*while ((tr.find('td:last-child').offset().left + tr.find('td:last-child').outerWidth()) < width) {
                 tr.append('<td></td>');
                 }*/
            }
        }

    </script>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AdministrationBundle/Resources/views/AdministrationAffaires/administrationaffairesedition.html.twig");
    }
}
