package Features

type Fileinfo_Proxy_Ips struct {
    /* ip超时锁,保护每个ip的请求频率 */
    RedisCacheConfig 

    /* ip保护的的间隔,默认1秒 */
    Protect_Second int

}

func NewFileinfo_Proxy_Ips(RedisCacheConfig ,Protect_Second int) *Fileinfo_Proxy_Ips{
    var this = new(Fileinfo_Proxy_Ips)
    this.SetRedisCacheConfig(RedisCacheConfig);
    this.SetProtect_Second(Protect_Second);
    return this
}

func (this *Fileinfo_Proxy_Ips)GetRedisCacheConfig() {
    return this.RedisCacheConfig;
}

func (this *Fileinfo_Proxy_Ips)SetRedisCacheConfig(RedisCacheConfig ) *Fileinfo_Proxy_Ips{
    this.RedisCacheConfig = RedisCacheConfig;
    return this
}
func (this *Fileinfo_Proxy_Ips)GetProtect_Second() int{
    return this.Protect_Second;
}

func (this *Fileinfo_Proxy_Ips)SetProtect_Second(Protect_Second int) *Fileinfo_Proxy_Ips{
    this.Protect_Second = Protect_Second;
    return this
}

/**
    */
func (this *Fileinfo_Proxy_Ips)__invoke()string{

}

