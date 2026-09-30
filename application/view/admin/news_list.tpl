<div id="page-name">
    <div id="text">
        <table class="important">
            <tr class="light-header">
                <td width="10px" class="tdheader">No.</td>
                <td width="300px" class="tdheader">Title</td>
                <td width="50px" class="tdheader">Status</td>
                <td width="80px" class="tdheader">Edit/Remove</td>
            </tr>
{foreach from=$list item=news key=key name=news}
            <tr class={cycle values="light, shadow"}>
                <td>{math equation="x + y" x=$smarty.foreach.news.index y=1}</td>
                <td align="left" >{$news.title}</td>
                <td>{$news.status}</td>
                <td><a href="index.php?section=admin&page=news&cmd=edit&id={$news.newsId}" onClick=""><img src="images/en/edit.gif" class="contact-image"/></a>&nbsp;&nbsp;&nbsp;
                	<a href="javascript:void(0);" onclick="if(confirm('Are you sure to remove this news?'))document.location.href = 'index.php?section=admin&page=news&cmd=remove&id={$news.newsId}';return false;" ><img src="images/en/delete.gif" class="contact-image"/></a></td>
            </tr>
{foreachelse}
            <tr class="light">
                <td align="center"> :: nothing news exist ::</td>
            </tr>
{/foreach}
        </table>
    </div>
</div>