package Features

type Fileinfo_tmp struct {
}

func NewFileinfo_tmp() *Fileinfo_tmp{
    var this = new(Fileinfo_tmp)
    return this
}


/**
    返回新的文件路径*/
func (this *Fileinfo_tmp)__invoke()string{

}
func (this *Fileinfo_tmp)__invoke_this() *Fileinfo_tmp{
    this.__invoke();
    return this;
}

