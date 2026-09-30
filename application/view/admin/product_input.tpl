<div id="page-name">
    <div id="text">
        <fieldset>
    	<legend> {if $list.productId} Edit product {else} Add product {/if} </legend>
        <form id="product" name="product" method="post" action="index.php?section=admin&page=product&cmd={if $list.productId}update{else}insert{/if}">
            <input type="hidden" id="id" name="id" value="{$list.productId}" />
                <table width="600">
                    <tr>
                        <td width="70">Product Name : </td>
                        <td><input type="text" id="titleproduct" name="titleproduct" value="{$list.product}" maxlength="50" size="40"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">short description : </td>
                    </tr>
                   <tr>
                        <td colspan="2">
                        	<input type="text" id="shortdescription" name="shortdescription" value="{$list.shortDescription}" maxlength="50" size="80"/>
                        </td>
                    </tr>
                    <tr>
                        <td width="50">price : </td>
                        <td><input type="text" id="price" name="price" value="{$list.price}" maxlength="50" size="40"/></td>
                    </tr>
					<tr>
                        <td width="50">amount : </td>
                        <td><input type="text" id="amount" name="amount" value="{$list.amount}" maxlength="50" size="40"/></td>
                    </tr>
                    <tr>
                        <td width="50">company : </td>
                        <td><input type="text" id="company" name="company" value="{$list.company}" maxlength="50" size="40"/></td>
                    </tr>
                    <tr>
                        <td width="50">keywords : </td>
                        <td><input type="text" id="keyword" name="keyword" value="{$list.keyword}" maxlength="50" size="40"/></td>
                    </tr>
                    <tr>
                        <td width="50">page title : </td>
                        <td><input type="text" id="pageTitle" name="pagetitle" value="{$list.pageTitle}" maxlength="50" size="40"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="tt">description : </td>
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
                        	<input class="button-style" type="submit" id="send-product" name="send-product" value="Send"/>&nbsp;
                        	<input class="button-style" type="reset" id="clear-product" name="send-product" value="Reset"/></td>
                    </tr>
                </table>
        </form>
        </fieldset>
    </div>
</div>