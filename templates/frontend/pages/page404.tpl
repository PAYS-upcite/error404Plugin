{**
 * templates/frontend/pages/page404.tpl
 *
 * Copyright (c) 2022-2023 Bourrand Erwan
 * Distributed under the GNU GPL v3.
 *
 * @brief 404 error page
 *
 *}

{* passing variable *}

{include file="frontend/components/header.tpl" pageTitle="about.aboutContext"}

{block name="informationalContent"}
	<h1 class="mb-4">{translate|escape key="plugins.generic.error404.title"}</h1>
	<p><a href="{url page="index" router=$smarty.const.ROUTE_PAGE}">{translate|escape key="plugins.generic.error404.link"}</a></p>
{/block}

{include file="frontend/components/footer.tpl"}
