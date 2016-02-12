<?php add_thickbox(); ?>

<div class="wrap">
    <h2>Punch Cards
    <a href="#TB_inline?&width=400&height200&inlineId=add-punch-card-pop" class="thickbox add-new-h2">Add Punch Card</a></h2>
    <div class="tablenav top">
        <div class="alignleft actions bulkactions">
        </div>
    </div>
    <table id="punch-cards-table" class="widefat cbw-admin-table" cellspacing="0">
        <thead>
            <tr>
                <th id="columnname" class="column-card-id column-title" scope="col">ID</th>
                <th id="columnname" class="column-card-name column-title" scope="col">Name</th>
                <th id="columnname" class="column-card-email column-title" scope="col">Email</th>
                <th id="columnname" class="column-card-phone column-title" scope="col">Phone</th>
                <th id="columnname" class="column-card-punches column-title" scope="col">Punches</th>
                <th id="columnname" class="column-card-completed column-title" scope="col">Completed</th>
            </tr>
        </thead>
    </table>
</div>

<div id="add-punch-card-pop" style="display:none;">
    <form id="add_punch_card_form" name="add_punch_card_form" method="POST" action="">
        <input type='hidden' name='action' value='add_punch_card' />
        <table>
            <tbody>
                <tr class="add_user user_field">
                    <td>
                        <input type="text" name="card[first_name]" id="sub_first_name" placeholder="First Name" required="required" />
                        <input type="text" name="card[last_name]" id="sub_last_name" placeholder="Last Name" required="required" />
                    </td>
                </tr>
                <tr class="add_user user_field">
                    <td>
                        <input type="email" name="card[email]" id="sub_email" placeholder="Email" required="required" />

                        <input type="text" name="card[phone]" id="sub_email" placeholder="Phone" required="required" pattern="[0-9]{10}" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" id="add_punch_card_submit" class="button-primary" />
                    </td>
                </tr>

                <tr>
            </tbody>
        </table>
    </form>
</div>
