class openWindow
{
    open_window(w,h,url)
    {
        var left = screen.width / 2 - w / 2;
        var top = screen.height / 2 - h / 2;       
        window.open(url, "_blank", "left=" + left + ", top=" + (top - 52) + ", width=" + w + ", height=" + h);
    };
};