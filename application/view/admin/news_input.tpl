<div id="page-name">
    <div id="text">
        <fieldset>
    	<legend> {if $list.newsId} Edit News {else} Add News {/if} </legend>
        <form id="news" name="news" method="post" action="index.php?section=admin&page=news&cmd={if $list.newsId}update{else}insert{/if}">
            <input type="hidden" id="id" name="id" value="{$list.newsId}" />
                <table width="600">
                    <tr>
                        <td width="50">Title : </td>
                        <td><input type="text" id="titlenews" name="titlenews" value="{$list.title}" maxlength="50" size="40"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="tt">Text : </td>
                    </tr>
                    <tr>
                        <td colspan="2" >{$oFCKeditor->Create()}</td>
                    </tr>
                    <tr>
                        <td>Status : </td>
                        <td><select name="status" id="status" >
                            <option value="inactive" {if $list.status eq 'inactive'} selected="selected" {/if}>Inactive</option>
                            <option value="active"{if $list.status eq 'active'} selected="selected" {/if} >Active</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align:center">
                        	<input class="button-style" type="submit" id="send-news" name="send-news" value="Send"/>&nbsp;
                        	<input class="button-style" type="reset" id="clear-news" name="send-news" value="Reset"/></td>
                    </tr>
                </table>
        </form>
        </fieldset>
    </div>
</div>