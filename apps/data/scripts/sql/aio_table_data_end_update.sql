update mitra_mitrapk set fklng=0 where fklng is null;
update mitra_mitrapk set mykatastima=(select mykatastimadefault from aab2badmin_basesettings) where mykatastima is null;
update mitra_mitrapk set myid=id where myid is null;
 update mitra_mitrapk set blpublished=1 where blpublished=-1;
 update mitra_mitrapk set fkparentlng=id where fkparentlng is null and id=id;
 update core_available_template_param_value set (aliasname) =(a.availabletemplatealiasname||a.availableparamname||paramvalue) from vf_templateavailable a where a.fkavailabletemplateparam=core_available_template_param_value.fkavailabletemplateparam;
 
 
select basemakeconstraints();
 select mvupdatedeallpendends();
select triggersenable();