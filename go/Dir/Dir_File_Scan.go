package Dir

type Dir_File_Scan struct {
    /* 只有匹配的才返回,正则表达式 */
    preg string

    /* 文件夹深度 */
    depth int

    /* 要检索的文件夹名称 */
    dir string

}

func NewDir_File_Scan() *Dir_File_Scan{
    var this = new(Dir_File_Scan)
    return this
}


/**
    */
func (this *Dir_File_Scan)__invoke(){

}

