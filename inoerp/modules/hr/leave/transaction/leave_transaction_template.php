<div id ="form_header">
 <form action=""  method="post" id="hr_leave_transaction"  name="hr_leave_transaction"><span class="heading">Leave Application </span>
  <div id ="form_header">
   <div id="tabsHeader">
    <ul class="tabMain">
     <li><a href="#tabsHeader-1">Basic Info</a></li>
     <li><a href="#tabsHeader-2">Attachments</a></li>
     <li><a href="#tabsHeader-3">Notes</a></li>
    </ul>
    <div class="tabContainer"> 
     <div id="tabsHeader-1" class="tabContent">
      <div class="large_shadow_box"> 
       <ul class="column four_column">
        <li><label><img src="<?php echo HOME_URL; ?>themes/images/serach.png" class="hr_leave_transaction_id select_popup clickable">
          Header Id : </label><?php $f->text_field_dsr('hr_leave_transaction_id') ?>
        <a name="show" href="form.php?class_name=hr_leave_transaction&<?php echo "mode=$mode"; ?>" class="show document_id hr_leave_transaction_id"><img src="<?php echo HOME_URL; ?>themes/images/refresh.png"/></a> 
        </li>
        <li data-employee_type="employee"><label><img src="<?php echo HOME_URL; ?>themes/images/serach.png" class="hr_employee_id select_popup clickable">
          Employee Name : </label><?php $f->text_field_d('employee_name'); ?>
         <?php echo $f->hidden_field_withId('employee_id', $$class->employee_id); ?>
        </li>
        <li><label>  Identification # : </label><?php $f->text_field_dr('identification_id'); ?>  </li>
        <li><label>  Requested Date : </label><?php echo $f->date_fieldFromToday('requsted_date', $$class->requsted_date); ?>  </li>
        <li><label>  Approved Date : </label><?php echo $f->text_field_dr('approved_date'); ?>  </li>
        <li data-employee_type="approver"><label><img src="<?php echo HOME_URL; ?>themes/images/serach.png" class="hr_employee_id select_popup clickable"> 
          Approver : </label><?php
         $f->text_field_dr('approved_by');
         echo $f->hidden_field_withId('approved_by_employee_id', $$class->approved_by_employee_id);
         ?>  </li>
        <li><label>  Leave Status : </label><?php echo $f->select_field_from_array('leave_status', hr_leave_transaction::$leave_status_a, $$class->leave_status, '', '', '', '', 1); ?>  </li>
        <li><label>  Action : </label><?php echo $f->select_field_from_array('leave_action', $$class->leave_action_a, $$class->leave_action); ?>  </li>
        <?php echo $f->hidden_field_withId('sys_notification_group_id', $$class->sys_notification_group_id) ?>
        <?php echo $f->hidden_field_withId('sys_notification_id', $$class->sys_notification_id) ?>
       </ul>
      </div>
     </div>
     <div id="tabsHeader-2" class="tabContent">
      <div> <?php echo ino_attachement($file) ?> </div>
     </div>
     <div id="tabsHeader-3" class="tabContent">
      <div> 
       <div id="comments">
        <div id="comment_list">
         <?php echo!(empty($comments)) ? $comments : ""; ?>
        </div>
        <div id ="display_comment_form">
         <?php
         $reference_table = 'hr_leave_transaction';
         $reference_id = $$class->hr_leave_transaction_id;
         ?>
        </div>
        <div id="new_comment">
        </div>
       </div>
      </div>
     </div>
    </div>

   </div>
  </div>
  <div id ="form_line" class="form_line"><span class="heading">Date Details </span>
   <div id="tabsLine">
    <ul class="tabMain">
     <li><a href="#tabsLine-1">Leave Details</a></li>
    </ul>
    <div class="tabContainer"> 
     <ul class="column four_column">
      <li><label>  Leave Type : </label><?php echo $f->select_field_from_object('leave_type', hr_leave_type::find_all(), 'hr_leave_type_id', 'leave_type', $$class->leave_type, '', '', 1, $readonly); ?></li>
      <li><label>  From Date : </label><?php echo $f->date_fieldAnyDay('from_date', $$class->from_date); ?></li>
      <li><label>  To Date : </label><?php echo $f->date_fieldAnyDay('to_date', $$class->to_date); ?></li>
      <li><label>  Reason : </label><?php $f->text_field_dl('reason'); ?></li>
      <li><label>  Contact : </label><?php $f->text_field_dl('contact_details'); ?></li>
      <li><label>  No Of Days: </label><?php echo $f->number_field('leave_quantity', $$class->leave_quantity); ?></li>
     </ul>
    </div>
   </div> 
  </div> 
 </form>
</div>
<div id="js_data">
 <ul id="js_saving_data">
  <li class="headerClassName" data-headerClassName="hr_leave_transaction" ></li>
  <li class="savingOnlyHeader" data-savingOnlyHeader="true" ></li>
  <li class="primary_column_id" data-primary_column_id="hr_leave_transaction_id" ></li>
  <li class="form_header_id" data-form_header_id="hr_leave_transaction" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docHedaderId" data-docHedaderId="hr_leave_transaction_id" ></li>
  <li class="btn1DivId" data-btn1DivId="hr_leave_transaction_id" ></li>
 </ul>
</div>