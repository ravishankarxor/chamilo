{% extends 'layout/layout_1_col.tpl'|get_template %}
{% import 'macro/macro.tpl'|get_template as display %}

{% block content %}
<div class="row">
    <div class="col-md-3">
        <div class="social-network-menu">
            {{ social_avatar_block }}
            {{ social_menu_block }}
        </div>
    </div>
    <div class="col-md-9">
        {{ display.panel('PersonalDataIntroductionTitle' | get_lang , 'PersonalDataIntroductionText' | get_lang) }}
        {{ display.panel('PersonalDataKeptOnYou' | get_lang, personal_data.data) }}

        {% if personal_data.responsible %}
            {{ display.panel('PersonalDataResponsibleOrganizationTitle' | get_lang , personal_data.responsible ) }}
        {% endif %}

        {% if personal_data.treatment %}
        <div class="panel personal-data-treatment">
            <div class="panel-title">{{ 'PersonalDataTreatmentTitle' | get_lang }}</div>
            <div class="personal-data-treatment-description">
                {% for treatment in personal_data.treatment %}
                    {% if treatment.content %}
                    <div class="sub-section">
                        <div class="panel-sub-title">{{ treatment.title }}</div>
                        <div class="panel-body">{{ treatment.content }}</div>
                    </div>
                    {% endif %}
                {% endfor %}
            </div>
        </div>
        {% endif %}
        {% if personal_data.officer_name %}
            <div class="panel personal-data-responsible">
                <div class="panel-title">{{ 'PersonalDataOfficerName' | get_lang }}</div>
                <div class="personal-data-responsible-description">
                    <a href="mailto:{{ personal_data.officer_email }}">{{ personal_data.officer_name }}</a>
                </div>
                <div class="panel-title">{{ 'PersonalDataOfficerRole' | get_lang }}</div>
                <div class="personal-data-responsible-description">
                    {{ personal_data.officer_role }}
                </div>
            </div>
        {% endif %}

        {% if term_link %}
            {{ display.panel('TermsAndConditions'|get_lang, term_link ) }}
        {% endif %}

        {{ display.panel('PersonalDataPermissionsYouGaveUs' | get_lang, permission) }}
    </div>
</div>
{% endblock %}
