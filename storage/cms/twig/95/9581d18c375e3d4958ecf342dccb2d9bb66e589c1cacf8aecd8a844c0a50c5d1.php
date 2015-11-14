<?php

/* /Applications/XAMPP/xamppfiles/htdocs/hello-october/themes/martin-flex/partials/team.htm */
class __TwigTemplate_9fe4710a7f4d6d8017824a174e78192c508203f96ee1b14e8db68366daad2d9e extends Twig_Template
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
        // line 3
        echo "
";
        // line 10
        echo "
";
        // line 29
        echo "
";
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 51
        echo "
";
        // line 63
        echo "
";
        // line 65
        echo "
";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/hello-october/themes/martin-flex/partials/team.htm";
    }

    public function getDebugInfo()
    {
        return array (  40 => 65,  37 => 63,  34 => 51,  31 => 40,  28 => 38,  25 => 29,  22 => 10,  19 => 3,);
    }
}
/* {#<div class="content-section" id="our-team">#}*/
/* {#    <div class="container">#}*/
/* */
/* {#        <div class="row">#}*/
/* {#            <div class="heading-section col-md-12 text-center">#}*/
/* {#                <h2>Our Team</h2>#}*/
/* {#                <p>Meet our people and about our company</p>#}*/
/* {#            </div>#}*/
/* {#        </div>#}*/
/* */
/* {#        <div class="row">#}*/
/* {#        {% for member in team %}#}*/
/* {#            <div class="team-member col-md-3 col-sm-6">#}*/
/* {#                <div class="member-thumb">#}*/
/* {#                    <img src="{{ ('assets/images/' ~ member['image']) |theme }}" alt="{{ member['name'] }}">#}*/
/* {#                    <div class="team-overlay">#}*/
/* {#                        <h3>{{ member['name'] }}</h3>#}*/
/* {#                        <span>{{ member['position'] }}</span>#}*/
/* {#                        <ul class="social">#}*/
/* {#                            {% if member['facebook'] is defined %}<li><a href="{{ member['facebook'] }}" class="fa fa-facebook"></a></li>{% endif %}#}*/
/* {#                            {% if member['twitter']  is defined %}<li><a href="{{ member['twitter'] }}"  class="fa fa-twitter" ></a></li>{% endif %}#}*/
/* {#                            {% if member['linkedin'] is defined %}<li><a href="{{ member['linkedin'] }}" class="fa fa-linkedin"></a></li>{% endif %}#}*/
/* {#                        </ul>#}*/
/* {#                    </div>#}*/
/* {#                </div>#}*/
/* {#            </div>#}*/
/* {#        {% endfor %}#}*/
/* {#        </div>#}*/
/* */
/* {#        <div class="row">#}*/
/* {#            <div class="col-md-12 text-center">#}*/
/* {#                <div class="skills-heading">#}*/
/* {#                    <h3 class="skills-title">Our skills on web design</h3>#}*/
/* {#                    <p class="small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>#}*/
/* {#                </div>#}*/
/* {#            </div>#}*/
/* {#        </div>#}*/
/* */
/* {#        <div class="row">#}*/
/* */
/* {#            <div class="col-md-8 col-sm-6">#}*/
/* {#                <p>#}*/
/* {#                    Aliquam faucibus in dolor sed vestibulum. Sed adipiscing malesuada luctus. Morbi tincidunt, tellus scelerisque scelerisque scelerisque, sapien dui pretium augue, at consectetur sapien tellus vitae nunc. Ut vitae metus quis nulla cursus adipiscing pretium vel dolor. Fusce lacinia accumsan arcu, quis porttitor nisi tincidunt ut.#}*/
/* {#                    <br><br>#}*/
/* {#                    Etiam tincidunt, magna eu elementum tristique, sapien nisl venenatis lacus, nec sagittis lectus dui eget lorem. Donec in tempus mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin laoreet ac quam et volutpat. Aenean egestas interdum dolor, et mollis lectus consequat a.#}*/
/* {#                    <br><br>#}*/
/* {#                    Nunc malesuada nunc eget nunc sollicitudin posuere. Maecenas vitae tortor quis odio hendrerit sagittis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris ullamcorper, felis sit amet gravida malesuada, nisi sem rhoncus massa, non tempor est erat sit amet diam.#}*/
/* {#                    <br><br>#}*/
/* {#                </p>#}*/
/* {#            </div>#}*/
/* */
/* {#            <div class="col-md-4 col-sm-6">#}*/
/* {#                <ul class="progess-bars">#}*/
/* {#                {% for skill,percent in skills %}#}*/
/* {#                    <li>#}*/
/* {#                        <div class="progress">#}*/
/* {#                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ percent }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ percent }}%;">{{ skill }} {{ percent }}%</div>#}*/
/* {#                        </div>#}*/
/* {#                    </li>#}*/
/* {#                {% endfor %}#}*/
/* {#                </ul>#}*/
/* {#            </div>#}*/
/* */
/* {#        </div>#}*/
/* */
/* {#    </div>#}*/
/* {#</div>#}*/
