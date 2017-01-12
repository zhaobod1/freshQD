/**
 * Created by apple on 2017/1/12.
 * 火一五信息科技有限公司
 * 联系方式:15288986891
 * QQ:3186355915
 * web:http://host.huo15.com
 * 日期: 2017/1/12
 */
window.onload = function () {
  $('#menu-ul>li').each(function (index,el) {
    if (index>1) {
      $(el).remove();
    }
  })
}