<?php

/* @NoxIntranetAdministration/Administration/administrationAdmins.html.twig */
class __TwigTemplate_22476cd57ee1b0c7f807a3ef53b9be9eb186ecdfc86bfae0359fb54d9adefefc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/Administration/administrationAdmins.html.twig", 1);
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
        $__internal_a6ea81963b2656f52e52b19cc5c706479bca4023fd1dac09a108dc9c0df47766 = $this->env->getExtension("native_profiler");
        $__internal_a6ea81963b2656f52e52b19cc5c706479bca4023fd1dac09a108dc9c0df47766->enter($__internal_a6ea81963b2656f52e52b19cc5c706479bca4023fd1dac09a108dc9c0df47766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/Administration/administrationAdmins.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6ea81963b2656f52e52b19cc5c706479bca4023fd1dac09a108dc9c0df47766->leave($__internal_a6ea81963b2656f52e52b19cc5c706479bca4023fd1dac09a108dc9c0df47766_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_1ded17525165a0d56748b4c03652ef745d435d23e6d2ff26a041da2bb7d1d8de = $this->env->getExtension("native_profiler");
        $__internal_1ded17525165a0d56748b4c03652ef745d435d23e6d2ff26a041da2bb7d1d8de->enter($__internal_1ded17525165a0d56748b4c03652ef745d435d23e6d2ff26a041da2bb7d1d8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Admins";
        
        $__internal_1ded17525165a0d56748b4c03652ef745d435d23e6d2ff26a041da2bb7d1d8de->leave($__internal_1ded17525165a0d56748b4c03652ef745d435d23e6d2ff26a041da2bb7d1d8de_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_643e7d16a30bcf1987e6b6b051534394fbeea71a4d3c03fb81cf1dd4c53f4d07 = $this->env->getExtension("native_profiler");
        $__internal_643e7d16a30bcf1987e6b6b051534394fbeea71a4d3c03fb81cf1dd4c53f4d07->enter($__internal_643e7d16a30bcf1987e6b6b051534394fbeea71a4d3c03fb81cf1dd4c53f4d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration des comptes admins";
        
        $__internal_643e7d16a30bcf1987e6b6b051534394fbeea71a4d3c03fb81cf1dd4c53f4d07->leave($__internal_643e7d16a30bcf1987e6b6b051534394fbeea71a4d3c03fb81cf1dd4c53f4d07_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_146bac29a5a11ba57c8e360320bcb432818476fc3384869f62c722c2832c1970 = $this->env->getExtension("native_profiler");
        $__internal_146bac29a5a11ba57c8e360320bcb432818476fc3384869f62c722c2832c1970->enter($__internal_146bac29a5a11ba57c8e360320bcb432818476fc3384869f62c722c2832c1970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"divAdministrationAdmin\">

        <div id=\"creationAdmin\">
            <div id=\"creationAdminDiv\">
                 <form action='";
        // line 13
        echo $this->env->getExtension('routing')->getPath("nox_intranet_creation_admin");
        echo "' >
                    <label for=\"ajoutAdmin\"> Ajouter un admin <span class='infobulle' title=\"Ces champs servent UNIQUEMENT à ajouter des administrateurs 'locaux'. Pour nommer un utilisateur du domaine administrateur de l'intranet, passer par la gestion des utilisateurs.\"><span class=\"gras\" >local</span></span>: </label>
                    <input type=\"text\" name='adminname' id=\"adminname\" placeholder=\"Nom\" />
                    <input type=\"password\" name='adminpassword' id=\"adminpassword\" placeholder=\"Mot de passe\" />
                    <input type=\"password\" name='adminpasswordcheck' id=\"adminpasswordcheck\" placeholder=\"Répéter Mot de passe\" />
                    <input type=\"submit\" id=\"creer\" name=\"Créer\" value=\"Créer\" class=\"boutonFormulaire\" >
                </form>
            </div>
        </div>

        <table>

            <tr>
                <td> Administrateur </td>
                <td> Local </td>
                <td> Supprimer </td>
            </tr>

            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 32
            echo "
                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["admin"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 34
                echo "
                    ";
                // line 35
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 36
                    echo "
                        <tr>
                            <td> <p> ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "username", array()), "html", null, true);
                    echo " <p> </td>

                            <td>
                                ";
                    // line 41
                    if ($this->getAttribute($context["admin"], "local", array())) {
                        // line 42
                        echo "                                    oui
                                ";
                    } else {
                        // line 44
                        echo "                                    non
                                ";
                    }
                    // line 46
                    echo "                            </td>

                            <td> <a href='";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_suppression_admin", array("adminID" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                    echo "'> <img class=\"suppressionAdminImg\" src='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/User-Delete-32.png"), "html", null, true);
                    echo "'> </a> </td>
                        </tr>

                    ";
                }
                // line 52
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
        </table>

    </div>
";
        
        $__internal_146bac29a5a11ba57c8e360320bcb432818476fc3384869f62c722c2832c1970->leave($__internal_146bac29a5a11ba57c8e360320bcb432818476fc3384869f62c722c2832c1970_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/Administration/administrationAdmins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 54,  149 => 53,  143 => 52,  134 => 48,  130 => 46,  126 => 44,  122 => 42,  120 => 41,  114 => 38,  110 => 36,  108 => 35,  105 => 34,  101 => 33,  98 => 32,  94 => 31,  73 => 13,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}Administration Admins{% endblock %}*/
/* */
/* {% block messageAccueil %}Administration des comptes admins{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="divAdministrationAdmin">*/
/* */
/*         <div id="creationAdmin">*/
/*             <div id="creationAdminDiv">*/
/*                  <form action='{{ path('nox_intranet_creation_admin') }}' >*/
/*                     <label for="ajoutAdmin"> Ajouter un admin <span class='infobulle' title="Ces champs servent UNIQUEMENT à ajouter des administrateurs 'locaux'. Pour nommer un utilisateur du domaine administrateur de l'intranet, passer par la gestion des utilisateurs."><span class="gras" >local</span></span>: </label>*/
/*                     <input type="text" name='adminname' id="adminname" placeholder="Nom" />*/
/*                     <input type="password" name='adminpassword' id="adminpassword" placeholder="Mot de passe" />*/
/*                     <input type="password" name='adminpasswordcheck' id="adminpasswordcheck" placeholder="Répéter Mot de passe" />*/
/*                     <input type="submit" id="creer" name="Créer" value="Créer" class="boutonFormulaire" >*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <table>*/
/* */
/*             <tr>*/
/*                 <td> Administrateur </td>*/
/*                 <td> Local </td>*/
/*                 <td> Supprimer </td>*/
/*             </tr>*/
/* */
/*             {% for admin in admins %}*/
/* */
/*                 {% for role in admin.roles %}*/
/* */
/*                     {% if role == "ROLE_ADMIN" %}*/
/* */
/*                         <tr>*/
/*                             <td> <p> {{ admin.username }} <p> </td>*/
/* */
/*                             <td>*/
/*                                 {% if admin.local %}*/
/*                                     oui*/
/*                                 {% else %}*/
/*                                     non*/
/*                                 {% endif %}*/
/*                             </td>*/
/* */
/*                             <td> <a href='{{ path('nox_intranet_suppression_admin', {'adminID': admin.id}) }}'> <img class="suppressionAdminImg" src='{{ asset('bundles/noxintranetadministration/images/User-Delete-32.png') }}'> </a> </td>*/
/*                         </tr>*/
/* */
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/* */
/*         </table>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {# empty Twig template #}*/
/* */
