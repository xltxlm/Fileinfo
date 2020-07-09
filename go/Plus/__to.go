package Plus

type __to struct {
    /* 设置文件的路径 */
    Filepath string

}

func New__to(Filepath string) *__to{
    var this = new(__to)
    this.SetFilepath(Filepath);
    return this
}

func (this *__to)GetFilepath() string{
    return this.Filepath;
}

func (this *__to)SetFilepath(Filepath string) *__to{
    this.Filepath = Filepath;
    return this
}

/**
    */
func (this *__to)__Fileinfo_Read_Lines(){

}

/**
    */
func (this *__to)__Fileinfo(){

}

