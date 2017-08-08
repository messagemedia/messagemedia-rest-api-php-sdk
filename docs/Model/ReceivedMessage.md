# ReceivedMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | Account associated with this message | [optional] 
**action** | **string** | Action that was invoked for this message if any, OPTOUT, OPTIN, GLOBALOPTOUT | [optional] 
**content** | **string** | Content of the message | [optional] 
**destination_address** | **string** | Address this message was delivered to. If this message was received in response to a sent message, this is the source address of the sent message | [optional] 
**destination_address_country** | **string** | Country associated with the destination address | [optional] 
**format** | **string** | Format of message, SMS or TTS (Text To Speech) | [optional] 
**id** | **string** | Unique ID for this reply | [optional] 
**in_response_to** | **string** | If this message was received in response to a sent message, this is the ID of the sent message | [optional] 
**metadata** | **object** | If this message was received in response to a sent message, this is the metadata associated with the sent message | [optional] 
**source_address** | **string** | Address this message was received from. If this message was received in response to a sent message, this is the destination address of the sent message. | [optional] 
**source_address_country** | **string** | Country associated with the source address | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | Date time at which this message was received | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


