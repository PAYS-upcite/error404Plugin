{**
 * templates/frontend/pages/page404.tpl
 *
 * Copyright (c) 2022-2023 Bourrand Erwan
 * Distributed under the GNU GPL v3.
 *
 * @brief 404 error page
 *
 *}

{include file="frontend/components/header.tpl" pageTitle="plugins.generic.error404.title"}

<div class="page page_404">
	{block name="informationalContent"}
		<h1 class="mb-4 mt-4">{translate|escape key="plugins.generic.error404.title"}</h1>
		<p><a href="{url page="index" router=$smarty.const.ROUTE_PAGE}">{translate|escape key="plugins.generic.error404.link"}</a></p>
	{/block}
</div>

{include file="frontend/components/footer.tpl"}