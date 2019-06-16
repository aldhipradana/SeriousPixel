<?php 

?>
<div class="column column-container">
    <div id="content">
        <div class="label-dashboard">
            Inbox
        </div>

        <div class="row content-dashboard">
            <div class="column">
                <div class="form-links">
                    <a href="?page=pricelist-add" class="add">Tambah</a>
                </div>
                <table id="myTable">
                    <thead>
                    <tr>
                        <th>Pengirim</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                    </thead>
                    <tbody style="color:#000;">
                        <?php foreach($data as $data){?>
                        <tr>
                            <td><?php echo $data['Pengirim']; ?></td>
                            <td><?php echo $data['Email']; ?></td>
                            <td><?php echo $data['Message']; ?></td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>