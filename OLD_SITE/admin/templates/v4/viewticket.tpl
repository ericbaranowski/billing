{$infobox}

<div class="alert alert-info text-center{if !$replyingadmin} hidden{/if}" role="alert" id="replyingAdminMsg">
    {$replyingadmin.name} {$_ADMINLANG.support.viewedandstarted} @ {$replyingadmin.time}
</div>

<h2>#{$tid} - {$subject} <select name="ticketstatus" id="ticketstatus" style="font-size:18px;">
{foreach from=$statuses item=statusitem}
<option{if $statusitem.title eq $status} selected{/if} style="color:{$statusitem.color}">{$statusitem.title}</option>
{/foreach}
</select> <a href="#" onclick="$('#ticketstatus').val('Closed');$('#ticketstatus').trigger('change');return false">{$_ADMINLANG.global.close}</a></h2>

<div class="ticketlastreply">{$_ADMINLANG.support.lastreply}: {$lastreply}</div>

{if $clientnotes}
<div id="clientsimportantnotes">
{foreach from=$clientnotes item=note}
<div class="ticketstaffnotes">
    <table>
        <tr>
            <td>{$note.adminuser}</td>
            <td align="right">{$note.modified}</td>
            <td width="16"><a href="clientsnotes.php?userid={$note.userid}&action=edit&id={$note.id}"><img src="images/edit.gif" width="16" height="16" align="absmiddle" /></a></td>
        </tr>
    </table>
    <div>
        {$note.note}
    </div>
</div>
{/foreach}
</div>
{/if}

{foreach from=$addons_html item=addon_html}
<div style="margin-bottom:15px;">{$addon_html}</div>
{/foreach}

<ul class="nav nav-tabs admin-tabs" role="tablist">
    <li class="active"><a href="#tab0" role="tab" data-toggle="tab">{$_ADMINLANG.support.addreply}</a></li>
    <li><a href="#tab1" role="tab" data-toggle="tab">{$_ADMINLANG.support.addnote}</a></li>
    <li><a href="#tab2" role="tab" data-toggle="tab" onclick="loadTab(2, 'customfields', 0)">{$_ADMINLANG.setup.customfields}</a></li>
    <li><a href="#tab3" role="tab" data-toggle="tab" onclick="loadTab(3, 'tickets', 0)">{$_ADMINLANG.support.clienttickets}</a></li>
    <li><a href="#tab4" role="tab" data-toggle="tab" onclick="loadTab(4, 'clientlog', 0)">{$_ADMINLANG.support.clientlog}</a></li>
    <li><a href="#tab5" role="tab" data-toggle="tab">{$_ADMINLANG.fields.options}</a></li>
    <li><a href="#tab6" role="tab" data-toggle="tab" onclick="loadTab(6, 'ticketlog', 0)">{$_ADMINLANG.support.ticketlog}</a></li>
</ul>
<div class="tab-content admin-tabs">
  <div class="tab-pane active" id="tab0">

<form method="post" action="{$smarty.server.PHP_SELF}?action=viewticket&id={$ticketid}" enctype="multipart/form-data" name="replyfrm" id="replyfrm">

<textarea name="message" id="replymessage" rows="14" style="width:100%;margin:0 0 10px 0;">{if $signature}



{$signature}{/if}</textarea>

<table class="form" width="100%" border="0" cellspacing="2" cellpadding="3">
<tr><td width="15%" class="fieldlabel">Tools</td><td class="fieldarea">

<select name="postaction">
<option value="return">{$_ADMINLANG.support.setansweredreturn}</option>
<option value="answered">{$_ADMINLANG.support.setansweredremain}</option>
{foreach from=$statuses item=statusitem}
{if $statusitem.id > 4}<option value="setstatus{$statusitem.id}">{$_ADMINLANG.support.setto} {$statusitem.title} {$_ADMINLANG.support.andremain}</option>{/if}
{/foreach}
<option value="close">{$_ADMINLANG.support.closereturn}</option>
<option value="note">{$_ADMINLANG.support.addprivatenote}</option>
</select> <input type="submit" value="{$_ADMINLANG.support.addresponse} &raquo;" name="postreply" class="btn btn-primary" id="postreplybutton" />

<div style="float:right;">
<input type="button" value="{$_ADMINLANG.support.insertpredef}" class="btn btn-default" id="insertpredef" />
<input type="button" value="{$_ADMINLANG.support.insertkblink}" class="btn btn-default" onclick="window.open('supportticketskbarticle.php','kbartwnd','width=500,height=400,scrollbars=yes')" />
</div>

<div id="prerepliescontainer">
    <div class="box">
        <div style="float:right;"><input type="text" id="predefq" size="25" value="{$_ADMINLANG.global.search}" onfocus="this.value=(this.value=='{$_ADMINLANG.global.search}') ? '' : this.value;" onblur="this.value=(this.value=='') ? '{$_ADMINLANG.global.search}' : this.value;" /></div>
        <div id="prerepliescontent">{$predefinedreplies}</div>
    </div>
</div>
</td></tr>
<tr><td class="fieldlabel">{$_ADMINLANG.support.attachments}</td><td class="fieldarea">

    <div class="row">
        <div class="col-sm-8">
            <input type="file" name="attachments[]" class="form-control" />
            <div id="fileuploads"></div>
        </div>
        <div class="col-sm-4 top-margin-5">
            <a href="#" id="addfileupload" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> {$_ADMINLANG.support.addmore}</a>
        </div>
    </div>

</td></tr>
{if $userid}<tr><td class="fieldlabel">{$_ADMINLANG.support.addbilling}</td><td class="fieldarea"><input type="text" name="billingdescription" size="60" value="{$_ADMINLANG.support.toinvoicedes}" onfocus="if(this.value=='{$_ADMINLANG.support.toinvoicedes}')this.value=''" /> @ <input type="text" name="billingamount" size="10" value="{$_ADMINLANG.fields.amount}" /> <select name="billingaction" class="form-control select-inline">
<option value="3" /> {$_ADMINLANG.billableitems.invoiceimmediately}</option>
<option value="0" /> {$_ADMINLANG.billableitems.dontinvoicefornow}</option>
<option value="1" /> {$_ADMINLANG.billableitems.invoicenextcronrun}</option>
<option value="2" /> {$_ADMINLANG.billableitems.addnextinvoice}</option>
</select></td></tr>{/if}
</table>

</form>

  </div>
  <div class="tab-pane" id="tab1">

<form method="post" action="{$smarty.server.PHP_SELF}?action=viewticket&id={$ticketid}">
<input type="hidden" name="postaction" value="note" />

<textarea name="message" id="replymessage" rows="14" style="width:100%"></textarea>

<br />
<img src="images/spacer.gif" height="8" width="1" />
<br />

<div class="btn-container">
    <input type="submit" value="{$_ADMINLANG.support.addnote}" class="btn btn-primary" name="postreply" />
</div>

</form>

  </div>
  <div class="tab-pane" id="tab2">

<img src="images/loading.gif" align="top" /> {$_ADMINLANG.global.loading}

  </div>
  <div class="tab-pane" id="tab3">

<img src="images/loading.gif" align="top" /> {$_ADMINLANG.global.loading}

  </div>
  <div class="tab-pane" id="tab4">

<img src="images/loading.gif" align="top" /> {$_ADMINLANG.global.loading}

  </div>
  <div class="tab-pane" id="tab5">

<form method="post" action="{$smarty.server.PHP_SELF}?action=viewticket&id={$ticketid}">

<table class="form" width="100%" border="0" cellspacing="2" cellpadding="3">
<tr><td width="15%" class="fieldlabel">{$_ADMINLANG.support.department}</td><td class="fieldarea"><select name="deptid">
{foreach from=$departments item=department}
<option value="{$department.id}"{if $department.id eq $deptid} selected{/if}>{$department.name}</option>
{/foreach}
</select></td><td width="15%" class="fieldlabel">{$_ADMINLANG.fields.clientid}</td><td class="fieldarea"><input type="text" name="userid" size="15" id="clientsearchval" value="{$userid}" /> <img src="images/icons/delete.png" alt="Cancel" class="absmiddle" id="clientsearchcancel" height="16" width="16"><div id="ticketclientsearchresults"></div></td></tr>
<tr><td class="fieldlabel">{$_ADMINLANG.fields.subject}</td><td class="fieldarea"><input type="text" name="subject" value="{$subject}" style="width:80%"></td><td class="fieldlabel">{$_ADMINLANG.support.flag}</td><td class="fieldarea"><select name="flagto">
<option value="0">{$_ADMINLANG.global.none}</option>
{foreach from=$staff item=staffmember}
<option value="{$staffmember.id}"{if $staffmember.id eq $flag} selected{/if}>{$staffmember.name}</option>
{/foreach}
</select></td></tr>
<tr><td class="fieldlabel">{$_ADMINLANG.fields.status}</td><td class="fieldarea"><select name="status">
{foreach from=$statuses item=statusitem}
<option{if $statusitem.title eq $status} selected{/if} style="color:{$statusitem.color}">{$statusitem.title}</option>
{/foreach}
</select></td><td class="fieldlabel">{$_ADMINLANG.support.priority}</td><td class="fieldarea"><select name="priority">
<option value="High"{if $priority eq "High"} selected{/if}>{$_ADMINLANG.status.high}</option>
<option value="Medium"{if $priority eq "Medium"} selected{/if}>{$_ADMINLANG.status.medium}</option>
<option value="Low"{if $priority eq "Low"} selected{/if}>{$_ADMINLANG.status.low}</option>
</select></td></tr>
<tr><td class="fieldlabel">{$_ADMINLANG.support.ccrecipients}</td><td class="fieldarea"><input type="text" name="cc" value="{$cc}" size="40"> ({$_ADMINLANG.transactions.commaseparated})</td><td class="fieldlabel">{$_ADMINLANG.support.mergeticket}</td><td class="fieldarea"><input type="text" name="mergetid" size="10"> ({$_ADMINLANG.support.notocombine})</td></tr>
</table>

<div class="btn-container">
    <input type="submit" value="{$_ADMINLANG.global.savechanges}" class="btn btn-primary" />
    <input type="reset" value="{$_ADMINLANG.global.cancelchanges}" class="btn btn-default" />
</div>

</form>

  </div>
  <div class="tab-pane" id="tab6">

<img src="images/loading.gif" align="top" /> {$_ADMINLANG.global.loading}

  </div>
</div>

{if $numnotes}
<h2>{$_ADMINLANG.support.privatestaffnote}</h2>
{foreach from=$notes item=note}
<div class="ticketstaffnotes">
    <table>
        <tr>
            <td>{$note.admin}</td>
            <td align="right">{$note.date}</td>
            <td width="16"><a href="#" onClick="doDeleteNote('{$note.id}');return false"><img src="images/delete.gif" alt="{$_ADMINLANG.support.deleteticketnote}" border="0" /></a></td>
        </tr>
    </table>
    <div>
        {$note.message}
    </div>
</div>
{/foreach}
{/if}

{if $relatedservices}
<div class="tablebg">
<table class="datatable" id="relatedservicestbl" width="100%" border="0" cellspacing="1" cellpadding="3">
<tr><th>{$_ADMINLANG.fields.product}</th><th>{$_ADMINLANG.fields.amount}</th><th>{$_ADMINLANG.fields.billingcycle}</th><th>{$_ADMINLANG.fields.signupdate}</th><th>{$_ADMINLANG.fields.nextduedate}</th><th>{$_ADMINLANG.fields.status}</th></tr>
{foreach from=$relatedservices item=relatedservice}
<tr{if $relatedservice.selected} class="rowhighlight"{/if}><td>{$relatedservice.name}</td><td>{$relatedservice.amount}</td><td>{$relatedservice.billingcycle}</td><td>{$relatedservice.regdate}</td><td>{$relatedservice.nextduedate}</td><td>{$relatedservice.status}</td></tr>
{/foreach}
</table>
</div>
{if $relatedservicesexpand}
    <div id="relatedservicesexpand">
        <a href="#" onclick="expandRelServices();return false" class="btn btn-default btn-xs">
            <i class="fa fa-plus"></i>
            {$_ADMINLANG.support.expand}
        </a>
    </div>
{/if}
{/if}

{if !$relatedservices}<br />{/if}

<form method="post" action="supporttickets.php" id="ticketreplies">
<input type="hidden" name="id" value="{$ticketid}" />
<input type="hidden" name="action" value="split" />

<div id="ticketreplies">

{foreach from=$replies item=reply}
<div class="{if $reply.admin}staff{/if}reply">

<div class="leftcol">

<div class="submitter">

{if $reply.admin}

<div class="name">{$reply.admin}</div>
<div class="title">{$_ADMINLANG.support.staff}</div>

{if $reply.rating}
<br />{$reply.rating}<br /><br />
{/if}

{else}

<div class="name">{$reply.clientname}</div>

<div class="title">
{if $reply.contactid}
{$_ADMINLANG.fields.contact}
{elseif $reply.userid}
{$_ADMINLANG.fields.client}
{else}
<a href="mailto:{$reply.clientemail}">{$reply.clientemail}</a>
{/if}
</div>

{if !$reply.userid && !$reply.contactid}<input type="button" value="{$_ADMINLANG.support.blocksender}" onclick="window.location='?action=viewticket&id={$ticketid}&blocksender=true&token={$csrfToken}'" class="btn btn-xs btn-small" />{/if}

{/if}

</div>

<div class="tools">

<div class="editbtns{if $reply.id}r{$reply.id}{else}t{$ticketid}{/if}">
<input type="button" value="{$_ADMINLANG.global.edit}" onclick="editTicket('{if $reply.id}r{$reply.id}{else}t{$ticketid}{/if}')" class="btn btn-xs btn-small btn-default" />
{if $deleteperm}<input type="button" value="{$_ADMINLANG.global.delete}" onclick="{if $reply.id}doDeleteReply('{$reply.id}'){else}doDeleteTicket(){/if}" class="btn btn-xs btn-small btn-danger" />{/if}
</div>
<div class="editbtns{if $reply.id}r{$reply.id}{else}t{$ticketid}{/if}" style="display:none">
<input type="button" value="{$_ADMINLANG.global.save}" onclick="editTicketSave('{if $reply.id}r{$reply.id}{else}t{$ticketid}{/if}')" class="btn btn-xs btn-small btn-success" />
<input type="button" value="{$_ADMINLANG.global.cancel}" onclick="editTicketCancel('{if $reply.id}r{$reply.id}{else}t{$ticketid}{/if}')" class="btn btn-xs btn-small btn-inverse" />
</div>

</div>

</div>
<div class="rightcol">

<div class="quoteicon"><a href="#" onClick="quoteTicket('{if !$reply.id}{$ticketid}{/if}','{if $reply.id}{$reply.id}{/if}')"><img src="images/icons/quote.png" border="0" /></a>{if $reply.id} <input type="checkbox" name="rids[]" value="{$reply.id}" />{/if}</div>
<div class="postedon">Posted {if $reply.friendlydate}on {$reply.friendlydate}{else}today{/if} at {$reply.friendlytime}</div>

<div class="msgwrap" id="content{if $reply.id}r{$reply.id}{else}t{$ticketid}{/if}">

<div class="message">
{$reply.message}
</div>

{if $reply.numattachments}
<br />
<strong>{$_ADMINLANG.support.attachments}</strong>
<br /><br />
{foreach from=$reply.attachments key=num item=attachment}
{if $thumbnails}
<div class="ticketattachmentcontainer">
<a href="../{$attachment.dllink}"><img src="../includes/thumbnail.php?{if $reply.id}rid={$reply.id}{else}tid={$ticketid}{/if}&i={$num}" class="ticketattachmentthumb" /><br />
<img src="images/icons/attachment.png" align="top" /> {$attachment.filename}</a><br /><small><a href="{$attachment.deletelink}" onclick="return confirm('{$_ADMINLANG.support.delattachment|escape:'javascript'}')" style="color:#cc0000">{$_ADMINLANG.support.remove}</a></small>
</div>
{else}
<a href="../{$attachment.dllink}"><img src="images/icons/attachment.png" align="absmiddle" /> {$attachment.filename}</a> <small><a href="{$attachment.deletelink}" onclick="return confirm('{$_ADMINLANG.support.delattachment|escape:'javascript'}')" style="color:#cc0000">{$_ADMINLANG.support.remove}</a></small><br />
{/if}
{/foreach}
<div class="clear"></div>
{/if}

</div>

</div>

</div>
{/foreach}

</div>

<a href="supportticketsprint.php?id={$ticketid}" target="_blank" class="btn btn-default btn-xs">
    <i class="fa fa-print"></i>
    {$_ADMINLANG.support.viewprintable}
</a>
{if $repliescount>1}
    <span style="float:right;">
        <input type="button" value="{$_ADMINLANG.support.splitticketdialogbutton}" onclick="openModal('splitTicket')" class="btn btn-xs" />
    </span>
{/if}

{$splitticketdialog}
<input type="hidden" name="splitdeptid" id="splitdeptid" />
<input type="hidden" name="splitsubject" id="splitsubject" />
<input type="hidden" name="splitpriority" id="splitpriority" />
<input type="hidden" name="splitnotifyclient" id="splitnotifyclient" />
</form>

