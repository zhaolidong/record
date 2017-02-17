/**
 * Created by bofu on 2016/12/8.
 */
fis.media('php').match('*.php', {
    deploy: fis.plugin('http-push', {
        receiver: 'http://paybak.yhctech.com/fisupload/no_type_file',
        to: '/work/application/views' ,
        data:{
            //project_name:static.projectName
        }
    }),
    domain:"http://static.yhctech.com/"
});