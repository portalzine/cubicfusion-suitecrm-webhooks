<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

require_once 'modules/WEBH_HOOKS_REQUEST/SenderRequest.php';

class WEBH_HOOKS_REQUEST extends Basic
{
    public $new_schema = true;
    public $module_dir = 'WEBH_HOOKS_REQUEST';
    public $object_name = 'WEBH_HOOKS_REQUEST';
    public $table_name = 'webh_hooks_request';
    public $importable = false;
    public static $FINALE_STATUS = 'success';
    public static $ERROR_STATUS = 'error';
    public static $SEND_STATUS = 'ready_to_send';

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;
    public $url;
    public $status;
    public $data;
    public $error_text;
    public $request_type;

    // Non-DB fields for key-value pairs.
    // Added to prevent dynamic property creation errors in PHP 8.2+.
    public $key01;
    public $key02;
    public $key03;
    public $key04;
    public $key05;
    public $key06;
    public $key07;
    public $key08;
    public $key09;
    public $key10;
    public $key11;
    public $key12;
    public $key13;
    public $key14;
    public $key15;
    public $key16;
    public $key17;
    public $key18;
    public $key19;
    public $key20;
    public $key21;
    public $key22;
    public $key23;
    public $key24;
    public $key25;
    public $key26;
    public $key27;
    public $key28;
    public $key29;
    public $key30;
    public $key31;
    public $key32;
    public $key33;
    public $key34;
    public $key35;
    public $key36;
    public $key37;
    public $key38;
    public $key39;
    public $key40;
    public $key41;
    public $key42;
    public $key43;
    public $key44;
    public $key45;
    public $key46;
    public $key47;
    public $key48;
    public $key49;
    public $key50;
    public $key51;
    public $key52;
    public $key53;
    public $key54;
    public $key55;
    public $key56;
    public $key57;
    public $key58;
    public $key59;
    public $key60;
    public $key61;
    public $key62;
    public $key63;
    public $key64;
    public $key65;
    public $key66;
    public $key67;
    public $key68;
    public $key69;
    public $key70;
    public $key71;
    public $key72;
    public $key73;
    public $key74;
    public $key75;
    public $key76;
    public $key77;
    public $key78;
    public $key79;
    public $key80;
    public $key81;
    public $key82;
    public $key83;
    public $key84;
    public $key85;
    public $key86;
    public $key87;
    public $key88;
    public $key89;
    public $key90;
    public $key91;
    public $key92;
    public $key93;
    public $key94;
    public $key95;
    public $key96;
    public $key97;
    public $key98;
    public $key99;
    public $key100;
    public $value01;
    public $value02;
    public $value03;
    public $value04;
    public $value05;
    public $value06;
    public $value07;
    public $value08;
    public $value09;
    public $value10;
    public $value11;
    public $value12;
    public $value13;
    public $value14;
    public $value15;
    public $value16;
    public $value17;
    public $value18;
    public $value19;
    public $value20;
    public $value21;
    public $value22;
    public $value23;
    public $value24;
    public $value25;
    public $value26;
    public $value27;
    public $value28;
    public $value29;
    public $value30;
    public $value31;
    public $value32;
    public $value33;
    public $value34;
    public $value35;
    public $value36;
    public $value37;
    public $value38;
    public $value39;
    public $value40;
    public $value41;
    public $value42;
    public $value43;
    public $value44;
    public $value45;
    public $value46;
    public $value47;
    public $value48;
    public $value49;
    public $value50;
    public $value51;
    public $value52;
    public $value53;
    public $value54;
    public $value55;
    public $value56;
    public $value57;
    public $value58;
    public $value59;
    public $value60;
    public $value61;
    public $value62;
    public $value63;
    public $value64;
    public $value65;
    public $value66;
    public $value67;
    public $value68;
    public $value69;
    public $value70;
    public $value71;
    public $value72;
    public $value73;
    public $value74;
    public $value75;
    public $value76;
    public $value77;
    public $value78;
    public $value79;
    public $value80;
    public $value81;
    public $value82;
    public $value83;
    public $value84;
    public $value85;
    public $value86;
    public $value87;
    public $value88;
    public $value89;
    public $value90;
    public $value91;
    public $value92;
    public $value93;
    public $value94;
    public $value95;
    public $value96;
    public $value97;
    public $value98;
    public $value99;
    public $value100;

    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }

    public function save($check_notify = false)
    {
        $data = $this->getArrayDataFromFields();
        $this->data = base64_encode(json_encode($data));
        parent::save($check_notify); // TODO: Change the autogenerated stub
        if($this->status == self::$SEND_STATUS){
            $this->send_request();
        }
        return $this->id;
    }

    public function retrieve($id = -1, $encode = true, $deleted = true)
    {
        parent::retrieve($id, $encode, $deleted); // TODO: Change the autogenerated stub
        $data = json_decode(base64_decode($this->data),1);
        if(!empty($data) && is_array($data)) {
            $i = 1;
            $iterator = "";
            foreach ($data as $k => $v) {
                $iterator = $this->get_field_number($i);
                $key_field_name = "key{$iterator}";
                $value_field_name = "value{$iterator}";
                $this->$key_field_name = $k;
                $this->$value_field_name = $v;
                $i++;
            }
        }
        return $this;
    }

    public function get_field_number(int $i):string {
        $iterator='';
        if ($i<10){
            $iterator = "0{$i}";
        } else {
            $iterator = "{$i}";
        }
        return $iterator;
    }

    public function send_request(){
        $bean_data = $this->getCoreFieldsAsArray();
        $data = $this->getArrayDataFromFields();
        $sendRequest = new SenderRequest($this->url,array_merge($data,$bean_data),$this->request_type);
        $result = $sendRequest->sendRequest();
        $this->saveResultRequerys($result);
    }

    public function getArrayDataFromFields() : array {
        $data=[];
        for($i=1; $i<=100;$i++){
            $iterator=$this->get_field_number($i);
            $key_field_name = "key{$iterator}";
            $value_field_name = "value{$iterator}";
            if (!empty($this->$key_field_name)){
                $data[$this->$key_field_name] = $this->$value_field_name;
            }
        }
        return $data;
    }

    public function saveResultRequerys(array $result){
        if($result['status'] == 'ok'){
            $this->saveSuccessResult($result['result']);
        } else {
            $this->saveErrorStatus($result['result']);
        }
    }

    public function saveSuccessResult($result){
        $this->description = $result;
        $this->status = self::$FINALE_STATUS;
        $this->save();
    }

    public function saveErrorStatus($result){
        $this->error_text = $result;
        $this->status = self::$ERROR_STATUS;
        $this->save();
        throw new Exception($result, 1);
    }

    /**
     * Returns an associative array of the core bean properties.
     *
     * @return array
     */
    public function getCoreFieldsAsArray(): array
    {
        return [
            'bean_id' => $this->id,
            'name' => $this->name,
            'date_entered' => $this->date_entered,
            'date_modified' => $this->date_modified,
            'modified_user_id' => $this->modified_user_id,
            'modified_by_name' => $this->modified_by_name,
            'created_by' => $this->created_by,           
            'description' => $this->description, 
            'request_type' => $this->request_type,
        ];
    }
}