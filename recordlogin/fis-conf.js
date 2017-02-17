/**
 * Created by bofu on 2016/12/8.
 */
fis.media('html').match('*.html', {
    deploy: fis.plugin('http-push', {
        receiver: 'http://bofutest.yhctech.com/fisupload/no_type_file',
        to: '/work/tmp' ,
        data:{
            //project_name:static.projectName
            ossupload:'1'
        }
    }),
    domain:"http://static.yhctech.com/"
});