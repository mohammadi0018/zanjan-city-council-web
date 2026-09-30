<div id="form-order">
        <form name="contact-form" id="contact-form" method="post" action="index.php?page=static&cmd=order&la={$lang}">
            <table>
{if $alert}
         		<tr>
                    <td colspan="2" style="color:#F00; padding-bottom:10px" align="center"> {$msg} </td>
                </tr>
{/if}

{if $msg eq 'sended'}
         		<tr>
                    <td style="color:#060; padding-bottom:10px; text-align:center" align="center"> your order is sended </td>
                </tr>
{else}
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" id="name" size="20" value="{$list.name}" maxlength="50" /></td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="company" id="company" value="{$list.company}" size="20" maxlength="50" /></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type="text" name="phone" id="phone" value="{$list.phone}" size="20" maxlength="50" /></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email" value="{$list.email}" size="20" maxlength="50" /></td>
                </tr>
                <tr>
                    <td class="message">Message</td>
                    <td><textarea id="message" name="message" cols="50" rows="7">{$list.message}</textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="right"><input type="reset" id="reset" name="reset" value="Reset" />&nbsp;&nbsp;<input type="submit" id="send" name="send" value="Send" /></td>
                </tr>
{/if}
			</table>
        </form>
</div>
<div id="icon-order"><img src="images/en/order.jpg" width="80" height="80" alt="order" /></div>
<div class="clearer"></div>