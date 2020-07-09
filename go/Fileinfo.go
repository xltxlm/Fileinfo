package 

type Fileinfo struct {
    /* 扩展名,不带点的 */
    Extension string

    /* 获取文件名,带后缀 */
    Filename_and_Extension string

    /* 获取文件名,不带后缀 */
    Filename_no_Extension string

    /* 文件全路径 */
    Realpath string

    /* 文件大小 */
    Filesize int

    /* 文件夹 */
    Dirname string

    /* 文件是否存在 */
    Exists bool

    /* 文件存在,但是内容为空 */
    ExistsEmpty bool

    /* 文件创建时间 */
    Filemtime string

}

func NewFileinfo(Extension string,Filename_and_Extension string,Filename_no_Extension string,Realpath string,Filesize int,Dirname string,Exists bool,ExistsEmpty bool,Filemtime string) *Fileinfo{
    var this = new(Fileinfo)
    this.SetExtension(Extension);
    this.SetFilename_and_Extension(Filename_and_Extension);
    this.SetFilename_no_Extension(Filename_no_Extension);
    this.SetRealpath(Realpath);
    this.SetFilesize(Filesize);
    this.SetDirname(Dirname);
    this.SetExists(Exists);
    this.SetExistsEmpty(ExistsEmpty);
    this.SetFilemtime(Filemtime);
    return this
}

func (this *Fileinfo)GetExtension() string{
    return this.Extension;
}

func (this *Fileinfo)SetExtension(Extension string) *Fileinfo{
    this.Extension = Extension;
    return this
}
func (this *Fileinfo)GetFilename_and_Extension() string{
    return this.Filename_and_Extension;
}

func (this *Fileinfo)SetFilename_and_Extension(Filename_and_Extension string) *Fileinfo{
    this.Filename_and_Extension = Filename_and_Extension;
    return this
}
func (this *Fileinfo)GetFilename_no_Extension() string{
    return this.Filename_no_Extension;
}

func (this *Fileinfo)SetFilename_no_Extension(Filename_no_Extension string) *Fileinfo{
    this.Filename_no_Extension = Filename_no_Extension;
    return this
}
func (this *Fileinfo)GetRealpath() string{
    return this.Realpath;
}

func (this *Fileinfo)SetRealpath(Realpath string) *Fileinfo{
    this.Realpath = Realpath;
    return this
}
func (this *Fileinfo)GetFilesize() int{
    return this.Filesize;
}

func (this *Fileinfo)SetFilesize(Filesize int) *Fileinfo{
    this.Filesize = Filesize;
    return this
}
func (this *Fileinfo)GetDirname() string{
    return this.Dirname;
}

func (this *Fileinfo)SetDirname(Dirname string) *Fileinfo{
    this.Dirname = Dirname;
    return this
}
func (this *Fileinfo)GetExists() bool{
    return this.Exists;
}

func (this *Fileinfo)SetExists(Exists bool) *Fileinfo{
    this.Exists = Exists;
    return this
}
func (this *Fileinfo)GetExistsEmpty() bool{
    return this.ExistsEmpty;
}

func (this *Fileinfo)SetExistsEmpty(ExistsEmpty bool) *Fileinfo{
    this.ExistsEmpty = ExistsEmpty;
    return this
}
func (this *Fileinfo)GetFilemtime() string{
    return this.Filemtime;
}

func (this *Fileinfo)SetFilemtime(Filemtime string) *Fileinfo{
    this.Filemtime = Filemtime;
    return this
}

/**
    确保文件存在*/
func (this *Fileinfo)Touch(){

}
func (this *Fileinfo)Touch_this() *Fileinfo{
    this.Touch();
    return this;
}

/**
    重新获取文件的信息*/
func (this *Fileinfo)Reload(){

}
func (this *Fileinfo)Reload_this() *Fileinfo{
    this.Reload();
    return this;
}

/**
    删除掉文件*/
func (this *Fileinfo)Unlink(){

}

