package core

type RealgazetaError struct {
	IsRealgazetaError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewRealgazetaError(code string, msg string, ctx *Context) *RealgazetaError {
	return &RealgazetaError{
		IsRealgazetaError: true,
		Sdk:              "Realgazeta",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *RealgazetaError) Error() string {
	return e.Msg
}
