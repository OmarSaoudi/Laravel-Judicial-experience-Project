<?php

namespace App\Repository;

interface JudicialRepositoryInterface{

    // GetJudicials
    public function GetJudicials();

    // CreateJudicials
    public function CreateJudicials();

    // StoreJudicials
    public function StoreJudicials($request);

    // ShowJudicials
    public function ShowJudicials($id);

    // EditJudicials
    public function EditJudicials($id);

    // UpdateJudicials
    public function UpdateJudicials($request);

    // DeleteJudicials
    public function DeleteJudicials($request);

    // DeleteAllJudicials
    public function delete_all_j($request);

    //UploadAttachment
    public function UploadAttachment($request);

    //DownloadAttachment
    public function DownloadAttachment($judicialsname,$filename);

    //DeleteAttachment
    public function DeleteAttachment($request);

    //NotificationReaded
    public function NotificationReaded($id);

    //MarkAsRead
    public function MarkAsRead();

}


